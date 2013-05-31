<?php

/**
 * personal actions.
 *
 * @package    happroject
 * @subpackage personal
 * @author     Vorontsov S.A.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personalActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //
  }

  public function executeProfile(sfWebRequest $request)
  {
    $this->form = new ProfileForm($this->getUser()->getGuardUser());

    if ($request->isMethod(sfRequest::POST)) {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Ваш профиль был изменён',
        ));

        $this->redirect('personal/profile');
      }
    }
  }

  public function executePassword(sfWebRequest $request)
  {
    $this->form = new sfGuardChangeUserPasswordForm($this->getUser()->getGuardUser());
    $this->form->getWidgetSchema()->setLabels(array(
      'password' => 'Новый пароль',
      'password_again' => 'Новый пароль ещё раз',
    ));

    if ($request->isMethod(sfRequest::POST)) {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Ваш пароль был изменён',
        ));

        $this->redirect('personal/password');
      }
    }
  }
}
