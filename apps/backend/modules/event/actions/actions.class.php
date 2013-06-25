<?php

/**
 * event actions.
 *
 * @package    cheapon
 * @subpackage event
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->events = Doctrine_Query::create()
      ->from('Event e')
      ->leftJoin('e.Provider p')
      ->execute()
    ;
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->event = Doctrine_Core::getTable('Event')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->event);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EventForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EventForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($event = Doctrine_Core::getTable('Event')->find(array($request->getParameter('id'))), sprintf('Object event does not exist (%s).', $request->getParameter('id')));
    $this->form = new EventForm($event);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($event = Doctrine_Core::getTable('Event')->find(array($request->getParameter('id'))), sprintf('Object event does not exist (%s).', $request->getParameter('id')));
    $this->form = new EventForm($event);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($event = Doctrine_Core::getTable('Event')->find(array($request->getParameter('id'))), sprintf('Object event does not exist (%s).', $request->getParameter('id')));
    $event->delete();

    $this->redirect('event/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $event = $form->save();

      $this->redirect('event/edit?id='.$event->getId());
    }
  }
  
  public function executeCategories(sfWebRequest $request)
  {
    $this->categories = Doctrine_Query::create()
      ->from('Category c')
      ->execute()
    ;
  }

  public function executeNewcategory(sfWebRequest $request)
  {
    $this->form = new CategoryForm();
  }

  public function executeCreatecategory(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoryForm();

    $this->processCategoryForm($request, $this->form);

    $this->setTemplate('newcategories');
  }

  public function executeEditcategory(sfWebRequest $request)
  {
    $this->forward404Unless($category = Doctrine_Core::getTable('Category')->find(array($request->getParameter('id'))), sprintf('Object category does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoryForm($category);
  }

  public function executeUpdatecategory(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($category = Doctrine_Core::getTable('Category')->find(array($request->getParameter('id'))), sprintf('Object category does not exist (%s).', $request->getParameter('id')));
    $this->form = new CategoryForm($category);

    $this->processCategoryForm($request, $this->form);

    $this->setTemplate('editcategories');
  }

  public function executeDeletecategory(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($category = Doctrine_Core::getTable('Category')->find(array($request->getParameter('id'))), sprintf('Object category does not exist (%s).', $request->getParameter('id')));
    $category->delete();

    $this->redirect('event/categories');
  }

  protected function processCategoryForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $event = $form->save();

      $this->redirect('event/editcategory?id='.$event->getId());
    }
  }
}
