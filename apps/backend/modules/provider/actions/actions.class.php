<?php

/**
 * provider actions.
 *
 * @package    cheapon
 * @subpackage provider
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class providerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->providers = Doctrine_Query::create()
      ->from('Provider p')
      ->execute()
    ;
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->provider);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProviderForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProviderForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProviderForm($provider);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProviderForm($provider);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $provider->delete();

    $this->redirect('provider/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $provider = $form->save();

      $this->redirect('provider/edit?id='.$provider->getId());
    }
  }
}
