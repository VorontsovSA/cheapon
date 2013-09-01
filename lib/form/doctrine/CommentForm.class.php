<?php

/**
 * Comment form.
 *
 * @package    cheapon
 * @subpackage form
 * @author     slowpokes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {
    unset (
      $this['created_at'],
      $this['updated_at']
    );

    $this->getWidgetSchema()
      ->offsetSet('event_id', new sfWidgetFormInputHidden())
      ->setLabels([
        'name' => 'Комментарий',
        'answer' => 'Ответ',
      ]);
    ;
  }
}
