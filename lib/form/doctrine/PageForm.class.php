<?php

/**
 * Page form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  public function configure()
  {
    unset(
      $this['created_at'], 
      $this['created_by'],
      $this['updated_at'], 
      $this['updated_by'], 
      $this['version']
    );
    
    // $this->widgetSchema['name']->setAttribute('readonly', 'readonly');
    // $this->widgetSchema['slug']->setAttribute('readonly', 'readonly');
    
    $this->widgetSchema['content']->setAttribute('class', 'wisiwyg-editor');
    
    $this->widgetSchema->setLabels(array(
      'name' => 'Название раздела',
      'slug' => 'Имя в адресе',
      'content' => 'Контент',
    ));
  }
}
