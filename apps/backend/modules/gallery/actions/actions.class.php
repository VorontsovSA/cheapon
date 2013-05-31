<?php

/**
 * gallery actions.
 *
 * @package    cheapon
 * @subpackage gallery
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->gallerys = Doctrine_Query::create()
      ->from('Gallery g')
      ->execute()
    ;
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->gallery);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GalleryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new GalleryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new GalleryForm($gallery);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new GalleryForm($gallery);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $gallery->delete();

    $this->redirect('gallery/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $gallery = $form->save();

      $this->redirect('gallery/edit?id='.$gallery->getId());
    }
  }
}
