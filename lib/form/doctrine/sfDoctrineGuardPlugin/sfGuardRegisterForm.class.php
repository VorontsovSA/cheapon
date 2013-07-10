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
        ->offsetSet('phone', new sfWidgetFormInputText())
        ->offsetSet('city', new sfWidgetFormDoctrineChoice(array('multiple' => false, 'model' => 'City')))
        ->setLabels(array(
          'first_name' => 'Имя:',
          'email_address' => 'Эл. почта:',
          'password' => 'Пароль:',
          'password_again' => 'Повторите пароль:',
          'phone' => 'Телефон:',
          'city' => 'Город:',
        ))
    ;

    $this->useFields(array(
      'first_name',
      'phone',
      'city',
      'email_address',
      'password',
      'password_again',
    ));
  }
}