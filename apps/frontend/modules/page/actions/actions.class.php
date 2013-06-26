<?php

/**
 * page actions.
 *
 * @package    cheapon
 * @subpackage page
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->page = Doctrine_Core::getTable('Page')->findOneBySlug($request->getParameter('slug'));
    $this->forward404Unless($this->page);
  }

  public function executeFaq(sfWebRequest $request)
  {
    $this->faqs = Doctrine_Query::create()
      ->from('Faq f')
      ->addOrderBy('f.sort asc')
      ->execute()
    ;
  }
}
