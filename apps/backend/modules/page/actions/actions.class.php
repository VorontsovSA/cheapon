<?php

/**
 * page actions.
 *
 * @package    cheapon
 * @subpackage page
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->pages = Doctrine_Query::create()
      ->from('Page p')
      ->execute()
    ;
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->page = Doctrine_Core::getTable('Page')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->page);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PageForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PageForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($page = Doctrine_Core::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
    $this->form = new PageForm($page);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($page = Doctrine_Core::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
    $this->form = new PageForm($page);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($page = Doctrine_Core::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
    $page->delete();
    $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Раздел удален.',
        ));
    $this->redirect('page/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $page = $form->save();
      $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Данные раздела сохранены.',
        ));
      $this->redirect('page/edit?id='.$page->getId());
    }
  }
}
