<?php

/**
 * faq actions.
 *
 * @package    cheapon
 * @subpackage faq
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class faqActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->faqs = Doctrine_Query::create()
      ->from('Faq f')
      ->orderBy('f.sort')
      ->execute()
    ;
    $this->maxsort = Doctrine_Core::getTable('Faq')->getMaxSort();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->faq = Doctrine_Core::getTable('Faq')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->faq);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FaqForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FaqForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($faq = Doctrine_Core::getTable('Faq')->find(array($request->getParameter('id'))), sprintf('Object faq does not exist (%s).', $request->getParameter('id')));
    $this->form = new FaqForm($faq);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($faq = Doctrine_Core::getTable('Faq')->find(array($request->getParameter('id'))), sprintf('Object faq does not exist (%s).', $request->getParameter('id')));
    $this->form = new FaqForm($faq);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($faq = Doctrine_Core::getTable('Faq')->find(array($request->getParameter('id'))), sprintf('Object faq does not exist (%s).', $request->getParameter('id')));
    $faq->delete();
    $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Вопрос успешно удален.',
        ));
    $this->redirect('faq/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $faq = $form->save();
      $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Данные вопроса сохранены.',
        ));
      $this->redirect('faq/edit?id='.$faq->getId());
    }
  }
  
  public function executeUp(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($faq1 = Doctrine_Core::getTable('Faq')->find(array($request->getParameter('id'))), sprintf('Object faq does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($faq2 = Doctrine_Core::getTable('Faq')->findOneBySort(array($faq1->getSort()-1)), sprintf('Object faq with sort (%s).', $faq1->getSort()-1));
    
    $faq1['sort'] = $faq1['sort'] - 1;
    $faq2['sort'] = $faq2['sort'] + 1;

    $faq1->save();
    $faq2->save();

    $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Порядок успешно изменен.',
        ));
    
    $this->redirect('faq/index');
  }
  
  public function executeDown(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($faq1 = Doctrine_Core::getTable('Faq')->find(array($request->getParameter('id'))), sprintf('Object faq does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($faq2 = Doctrine_Core::getTable('Faq')->findOneBySort(array($faq1->getSort()+1)), sprintf('Object faq with sort (%s).', $faq1->getSort()+1));
    
    $faq1['sort'] = $faq1['sort'] + 1;
    $faq2['sort'] = $faq2['sort'] - 1;
    
    $faq1->save();
    $faq2->save();

    $this->getUser()->setFlash('flash', array(
          'type' => 'success',
          'message' => 'Порядок успешно изменен.',
        ));
    
    $this->redirect('faq/index');
  }
}
