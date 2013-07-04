<?php

/**
 * event actions.
 *
 * @package    cheapon
 * @subpackage event
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->categories = Doctrine_Query::create()
      ->from('Category c')
      ->addOrderBy('sort asc')
      ->execute()
    ;

    $eventsQuery = Doctrine_Query::create()
      ->from('Event e')
    ;

    if ($request->getParameter('category', 'all') !== 'all') {
      $eventsQuery
        ->innerJoin('e.Category c')
        ->addWhere('c.slug = ?', $request->getParameter('category'))
      ;
    }

    $this->events = $eventsQuery->execute();
  }

  public function executePast(sfWebRequest $request)
  {
    $this->forward('event', 'index');
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->event = Doctrine_Query::create()
      ->from('Event e')
      ->addWhere('e.id = ?', $request->getParameter('id'))
      ->limit(1)
      ->fetchOne()
    ;
  }
}
