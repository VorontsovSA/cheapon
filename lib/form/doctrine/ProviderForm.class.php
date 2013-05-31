<?php

/**
 * Provider form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProviderForm extends BaseProviderForm
{
  public function configure()
  {
    unset(
      $this['created_at'], 
      $this['created_by'],
      $this['updated_at'], 
      $this['updated_by'], 
      $this['user_id'], 
      $this['version']
    );

    $this->widgetSchema['short_description']->setAttribute('class', 'wisiwyg-editor');
    $this->widgetSchema['full_description']->setAttribute('class', 'wisiwyg-editor');

    $this->widgetSchema->setLabels(array(
      'name' => 'Название поставщика',
      'short_description' => 'Краткое описание',
      'full_description' => 'Полное описание',
      'url' => 'Адрес сайта',
      'e_mail' => 'E-mail',
      'business_hours' => 'Часы работы',
      'address' => 'Адрес',
      'city_id' => 'Город'
    ));
  }
}
