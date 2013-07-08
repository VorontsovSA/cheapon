<?php

/**
 * Provider
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    cheapon
 * @subpackage model
 * @author     slowpokes
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Provider extends BaseProvider
{
  public function getPhones()
  {
    $phones = Doctrine_Query::create()
      ->from('Phone p')
      ->select('p.name')
      ->addWhere('p.provider_id = ?', $this->getId())
      ->execute(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR)
    ;

    return count($phones) ? implode(', ', $phones) : false;
  }
}
