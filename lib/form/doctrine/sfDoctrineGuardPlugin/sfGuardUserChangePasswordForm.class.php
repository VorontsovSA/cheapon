<?php

/**
 * sfGuardUser form.
 *
 * @package    CallCenter
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserChangePasswordForm extends PluginsfGuardUserForm
{
  public function configure()
  {
    unset(
      $this['permissions_list'],
      $this['last_login'],
      $this['created_at'],
      $this['updated_at'],
      $this['salt'],
      $this['algorithm'],
      $this['first_name'],
      $this['last_name'],
      $this['username'],
      $this['is_active'],
      $this['is_super_admin'],
      $this['email_address'],
      $this['group_number']
    );

    //$this->widgetSchema['groups_list'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['email_address'] = new sfWidgetFormInputHidden();

    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', false);
    $this->validatorSchema['password']->setMessage('required', 'Обязательное.');
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];

    $this->widgetSchema->moveField('password_again', 'after', 'password');

    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => 'Пароли не совпадают.')));
    $this->widgetSchema->setLabels(array(
      'password' => 'Новый пароль',
      'password_again' => 'Повторите пароль'
    ));
  }
}
