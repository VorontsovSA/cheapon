<?php

/**
 * feedback actions.
 *
 * @package    cheapon
 * @subpackage feedback
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class feedbackActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->feedbacks = Doctrine_Query::create()
      ->from('Feedback f')
      ->orderBy('f.created_at DESC')
      ->execute()
    ;
  }
}
