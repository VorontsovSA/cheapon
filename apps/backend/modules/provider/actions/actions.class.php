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
      ->innerJoin('p.City c')
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

    $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Поставщик успешно удален.',
        ));

    $this->redirect('provider/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $provider = $form->save();

      $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Поставщик успешно изменен.',
        ));

      $this->redirect('provider/edit?id='.$provider->getId());
    }
  }
  
  public function executeUserNew(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));

    $this->form = new sfGuardUserAdminForm();
    $this->form->setDefaults(array(
      'is_active' => true
    ));
  }

  public function executeUserCreate(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    
    $this->setTemplate('userNew');
    $this->form = new sfGuardUserAdminForm();

    $this->processUserForm($request, $this->form, array(
          'type' => 'success',
          'message' => 'Пользователь добавлен.',
        ), 'provider/show?id='.$this->provider->getId(), $this->provider);
  }

  public function executeUserDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('uid'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $provider->setUserId(null);
    $provider->save();
    $user->delete();

    $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Пользователь успешно удален.',
        ));

    $this->redirect('provider/show?id='.$provider->getId());
  }

  public function executeUserEdit(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($this->user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('uid'))), sprintf('Object provider does not exist (%s).', $request->getParameter('uid')));
    
    $this->form = new sfGuardUserAdminForm($this->user);
  }

  public function executeUserUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($this->provider = Doctrine_Core::getTable('Provider')->find(array($request->getParameter('id'))), sprintf('Object provider does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($this->user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('uid'))), sprintf('Object provider does not exist (%s).', $request->getParameter('uid')));
    
    $this->form = new sfGuardUserAdminForm($this->user);

    $this->setTemplate('userEdit');

    $this->processUserForm($request, $this->form, array(
          'type' => 'success',
          'message' => 'Пользователь обновлен.',
        ), 'provider/show?id='.$this->provider->getId(), $this->provider);
  }

  protected function processUserForm(sfWebRequest $request, sfForm $form, $flash=false, $redirect=false, $provider)
  {
    $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
    );

    if ($form->isValid()) {
      $object = $form->save();
      if($form->getObject()->isNew()) {
        $object->addGroupByName('registered_providers');
        $provider->setUserId($object->getId());
        $provider->save();
      }

      if ($flash and is_array($flash)) {
        $this->getUser()->setFlash('flssh', $flash);
      }

      if ($redirect) {
        $this->redirect($redirect);
      }
    }
  }
}
