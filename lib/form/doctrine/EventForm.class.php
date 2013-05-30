<?php

/**
 * Event form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventForm extends BaseEventForm
{
  public function configure()
  {
    unset(
      $this['created_at'], 
      $this['created_by'],
      $this['updated_at'], 
      $this['updated_by'], 
      $this['version'],
      $this['clients_list']
    );

    $this->setWidget('event_start', new bsWidgetFormDate());
    $this->setWidget('event_end',   new bsWidgetFormDate());
    $this->setWidget('sale_start',  new bsWidgetFormDate());
    $this->setWidget('sale_end',    new bsWidgetFormDate());

    $this->widgetSchema->setLabels(array(
      'name' => 'Название акции',
      'full_name' => 'Полное название',
      'discount' => 'Размер скидки',
      'price' => 'Цена купона',
      'conditions' => 'Условия акции',
      'description' => 'Описание акции',
      'event_start' => 'Начало действия акции',
      'event_end' => 'Окончание действия акции',
      'sale_start' => 'Начало продажи купонов',
      'sale_end' => 'Окончание продажи купонов',
      'is_active' => 'Акция опубликована',
      'photo1' => 'Фото на главной',
      'photo2' => 'Фото из описания №1',
      'photo3' => 'Фото из описания №2',
      'provider_id' => 'Поставщик акции'
    ));
  }
}
