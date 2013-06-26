<?php

/**
 * Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    cheapon
 * @subpackage model
 * @author     slowpokes
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Category extends BaseCategory
{
  public function getEventsCount()
  {
    $q = Doctrine_Query::create()
      ->select('COUNT(e.id) as number_of_events')
      ->from('Category c')
      ->leftJoin('c.Event e')
      ->where('c.id = ?', $this->id);
   
    return $q->fetchOne()->getNumberOfEvents();
  }
}