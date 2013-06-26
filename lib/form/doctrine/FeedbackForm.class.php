<?php

/**
 * Feedback form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FeedbackForm extends BaseFeedbackForm
{
  public function configure()
  {
    unset (
      $this['created_at'],
      $this['updated_at']
    );

    $this->getWidgetSchema()->setLabels(array(
      'name' => 'ФИО:',
      'email' => 'Эл. почта:',
      'message' => 'Комментарий:',
    ));

    $this->getWidgetSchema()->offsetGet('name')->setAttribute('class', 'input-block-level');
    $this->getWidgetSchema()->offsetGet('email')->setAttribute('class', 'input-block-level');
    $this->getWidgetSchema()->offsetGet('message')
      ->setAttribute('class', 'input-block-level')
      ->setAttribute('rows', 7)
    ;
  }
}
