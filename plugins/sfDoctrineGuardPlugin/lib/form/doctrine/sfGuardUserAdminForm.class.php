<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    unset(
      $this['is_super_admin'],
      $this['permissions_list'],
      $this['groups_list'],
      $this['read_comments_list']
    );
    
    $this->getWidgetSchema()
      ->setLabels(array(
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'email_address' => 'Email',
        'username' => 'Имя пользователя',
        'password' => 'Пароль',
        'password_again' => 'Пароль ещё раз',
        'is_active' => 'Активен?',
        'groups_list' => 'Группы',
      ))
    ;

    $validatorEmail = new sfValidatorDoctrineUnique(array('model' => 'sfGuardUser', 'column' => array('email_address')));
    $validatorUsername = new sfValidatorDoctrineUnique(array('model' => 'sfGuardUser', 'column' => array('username')));

    $validatorEmail->setMessage('invalid', 'Заданный адрес email уже используется.');
    $validatorUsername->setMessage('invalid', 'Заданное имя пользователя уже используется.');

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        $validatorEmail,
        $validatorUsername,
      ))
    );
  }
}
