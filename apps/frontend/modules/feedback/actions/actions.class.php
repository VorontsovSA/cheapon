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
  public function preExecute()
  {
    $this->page = Doctrine_Core::getTable('Page')->findOneBySlug('contacts');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FeedbackForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FeedbackForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $feedback = $form->save();

      $this->redirect('feedback/edit?id='.$feedback->getId());
    }
  }
}
