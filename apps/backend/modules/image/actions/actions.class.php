<?php

/**
 * image actions.
 *
 * @package    cheapon
 * @subpackage image
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class imageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->images = Doctrine_Query::create()
      ->from('Image i')
      ->where('i.provider_id = ?', $this->provider['id'])
      ->execute()
    ;
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImageForm();
    $this->form->setDefault('provider_id', $this->provider->getId());
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ImageForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($this->image = Doctrine_Core::getTable('Image')->find(array($request->getParameter('id'))), sprintf('Object image does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImageForm($this->image);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($this->image = Doctrine_Core::getTable('Image')->find(array($request->getParameter('id'))), sprintf('Object image does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImageForm($this->image);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($image = Doctrine_Core::getTable('Image')->find(array($request->getParameter('id'))), sprintf('Object image does not exist (%s).', $request->getParameter('id')));
    $provider_id = $image->getProvider()->getId();
    $image->delete();

    $this->redirect('image/index?id='.$provider_id);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $image = $form->save();

      $this->redirect('image/index?id='.$image->getProvider()->getId());
    }
  }
}
