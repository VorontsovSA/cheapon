<?php

/**
 * Faq form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FaqForm extends BaseFaqForm
{
  public function configure()
  {
    unset(
      $this['created_at'], 
      $this['created_by'],
      $this['updated_at'], 
      $this['updated_by'], 
      $this['version'],
      $this['sort']
    ); 

    $this->widgetSchema['name']->setAttribute('class', 'span8');
    $this->widgetSchema['answer']->setAttribute('class', 'span8');

    $this->widgetSchema->setLabels(array(
      'name' => 'Вопрос',
      'answer' => 'Ответ',
    ));
  }
}
