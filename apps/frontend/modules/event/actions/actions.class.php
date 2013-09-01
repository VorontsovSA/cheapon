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
    $categoriesQuery = Doctrine_Query::create()
      ->from('Category c')
      ->innerJoin('c.Events e')
      ->addOrderBy('sort asc')
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

    if ($request->getParameter('type') === 'past') {
      $eventsQuery->addWhere('e.sale_end <= now()');
      $categoriesQuery->addWhere('e.sale_end <= now()');
    } else {
      $eventsQuery->addWhere('e.sale_end > now()');
      $categoriesQuery->addWhere('e.sale_end > now()');
    }

    $this->categories = $categoriesQuery->execute();
    $this->events = $eventsQuery->execute();
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
