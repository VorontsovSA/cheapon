<?php

/**
 * Image form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ImageForm extends BaseImageForm
{
  public function configure()
  {
    unset (
      $this['created_at'],
      $this['created_by'],
      $this['updated_at'],
      $this['updated_by'],
      $this['version']
    );

    $this->widgetSchema['file'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => ($this->getObject()->getFile()) ? '/uploads/providerimages/'.$this->getObject()->getFile() : '/uploads/providerimages/noimage.gif',
      'is_image'  => true,
      'edit_mode' => true,
      'template'  => '<div>%file%<br />%input%</div>',
    ));

    $this->setValidator('file', new sfValidatorThumbnailFile(array(
      'width' => 1050,
      'height' => 440,
      'crop' => true,
      'required' => false,
      'path' => sfConfig::get('sf_upload_dir').'/providerimages',
    )));
  }
}
