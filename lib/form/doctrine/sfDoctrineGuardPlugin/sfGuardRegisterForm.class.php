<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    $this
      ->getWidgetSchema()
        ->setLabels(array(
          'first_name' => 'Имя:',
          'email_address' => 'Эл. почта:',
          'password' => 'Пароль:',
          'password_again' => 'Повторите пароль:',
          'phone' => 'Телефон:',
          'city_id' => 'Город:',
        ))
        ->offsetSet('username', new sfWidgetFormInputHidden())
    ;

    $this
      ->setDefaults(array(
        'username' => 'auto-generated+' . uniqid(),
      ))
      ->useFields(array(
        'first_name',
        'phone',
        'city_id',
        'email_address',
        'password',
        'password_again',
        'username',
      ))
    ;
  }
}
