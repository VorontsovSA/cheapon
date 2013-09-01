<?php

/**
 * sfGuardFormSignin for sfGuardAuth signin action
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardFormSignin.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardFormSignin extends BasesfGuardFormSignin
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    //$this->widgetSchema['password']->setAttribute('class', 'input-xlarge');
    $this->validatorSchema['username']->setMessage('required', 'Обязательное.');
    $this->validatorSchema['password']->setMessage('required', 'Обязательное.');
    $postvalidator = new sfGuardValidatorUser();
    $postvalidator->setMessage('invalid', 'Имя пользователя или пароль не совпадают.');
    $this->validatorSchema->setPostValidator($postvalidator);
    $this->widgetSchema->setLabels(array(
      'username' => 'Логин',
      'password' => 'Пароль',
      'remember' => 'Запомнить'
    ));

    $this->getWidgetSchema()->offsetGet('username')->setAttribute('placeholder', 'Эл. почта');
    $this->getWidgetSchema()->offsetGet('password')->setAttribute('placeholder', 'Пароль');
  }
}
