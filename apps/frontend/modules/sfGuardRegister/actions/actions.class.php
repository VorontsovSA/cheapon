<?php

/**
 * sfGuardRegister actions.
 *
 * @package    guard
 * @subpackage sfGuardRegister
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z jwage $
 */
class sfGuardRegisterActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    if ($this->getUser()->isAuthenticated())
    {
      $this->getUser()->setFlash('notice', 'You are already registered and signed in!');
      $this->redirect('@homepage');
    }

    $this->form = new sfGuardRegisterForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $user = $this->form->save();
        $this->getUser()->signIn($user);

        /* $message = Swift_Message::newInstance()
          ->setFrom(array(sfConfig::get('sf_mailer_from_email') => sfConfig::get('sf_mailer_from_name')))
          ->setTo(array($user->getEmailAddress() => $user->getFirstName() . ' ' . $user->getLastName()))
          ->setSubject(sfContext::getInstance()->getI18N()->__('Olympiad registration confirmation'))
          ->setBody($this->getPartial('registrationEmail', array('user' => $user)))
          ->setContentType('text/html')
          ->setCharset('utf-8')
        ;
        $this->getMailer()
          ->send($message)
        ; */

        $this->redirect('@homepage');
      }
    }
  }
}
