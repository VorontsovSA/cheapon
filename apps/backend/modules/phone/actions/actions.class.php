<?php

/**
 * phone actions.
 *
 * @package    cheapon
 * @subpackage phone
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class phoneActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->phones = Doctrine_Query::create()
      ->from('Phone p')
      ->execute()
    ;
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PhoneForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PhoneForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($phone = Doctrine_Core::getTable('Phone')->find(array($request->getParameter('id'))), sprintf('Object phone does not exist (%s).', $request->getParameter('id')));
    $this->form = new PhoneForm($phone);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($phone = Doctrine_Core::getTable('Phone')->find(array($request->getParameter('id'))), sprintf('Object phone does not exist (%s).', $request->getParameter('id')));
    $this->form = new PhoneForm($phone);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($phone = Doctrine_Core::getTable('Phone')->find(array($request->getParameter('id'))), sprintf('Object phone does not exist (%s).', $request->getParameter('id')));
    $phone->delete();

    $this->redirect('phone/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $phone = $form->save();

      $this->redirect('phone/edit?id='.$phone->getId());
    }
  }
}
