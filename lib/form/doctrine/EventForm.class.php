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
    
    $this->widgetSchema['conditions']->setAttribute('class', 'wisiwyg-editor');
    $this->widgetSchema['description']->setAttribute('class', 'wisiwyg-editor');
    
    $this->widgetSchema['photo1'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => ($this->getObject()->getPhoto1()) ? '/uploads/eventimages/'.$this->getObject()->getPhoto1() : '/uploads/eventimages/noimage.gif',
      'is_image'  => true,
      'edit_mode' => true,
      'template'  => '<div>%file%<br />%input%</div>',
    ));
    
    $this->setValidator('photo1', new sfValidatorThumbnailFile(array(
      'width' => 330,
      'height' => 290,
      'crop' => true,
      'required' => false,
      'path'     => sfConfig::get('sf_upload_dir').'/eventimages',
    )));
    
    $this->widgetSchema['photo2'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => ($this->getObject()->getPhoto2()) ? '/uploads/eventimages/'.$this->getObject()->getPhoto2() : '/uploads/eventimages/noimage.gif',
      'is_image'  => true,
      'edit_mode' => true,
      'template'  => '<div>%file%<br />%input%</div>',
    ));
    
    $this->setValidator('photo2', new sfValidatorThumbnailFile(array(
      'width' => 370,
      'height' => 290,
      'crop' => true,
      'required' => false,
      'path'     => sfConfig::get('sf_upload_dir').'/eventimages',
    )));
    
    $this->widgetSchema['photo3'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => ($this->getObject()->getPhoto3()) ? '/uploads/eventimages/'.$this->getObject()->getPhoto3() : '/uploads/eventimages/noimage.gif',
      'is_image'  => true,
      'edit_mode' => true,
      'template'  => '<div>%file%<br />%input%</div>',
    ));
    
    $this->setValidator('photo3', new sfValidatorThumbnailFile(array(
      'width' => 370,
      'height' => 290,
      'crop' => true,
      'required' => false,
      'path'     => sfConfig::get('sf_upload_dir').'/eventimages',
    )));
    
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
      'provider_id' => 'Поставщик акции',
      'category_id' => 'Категория'
    ));
  }
}

class sfValidatedFileCustom extends sfValidatedFile {
  public function generateFilename() {
    return uniqid() . $this->getExtension($this->getOriginalExtension);
  }
}
