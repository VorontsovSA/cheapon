<?php

/**
 * city actions.
 *
 * @package    cheapon
 * @subpackage city
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cityActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeModal(sfWebRequest $request)
  {
    $this->cities = Doctrine_Query::create()
      ->from('City c')
      ->addOrderBy('c.is_default desc')
      ->addOrderBy('c.name asc')
      ->execute()
    ;
  }

  public function executeChoose(sfWebRequest $request)
  {
    throw new Exception('Not impelemented yet');
  }
}
