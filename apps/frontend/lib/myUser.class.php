<?php

class myUser extends sfGuardSecurityUser
{
  public function getCity()
  {
    if ($this->getAttribute('city')) {
      return CityTable::findOneBySlug($this->getAttribute('city'));
    }

    if (
      $this->isAuthenticated() && true == ($city = $this->getGuardUser()->getCity())
      or
      true == ($geocity = ZapilGeo::getCity()) && true == ($city = CityTable::findOneByName($geocity))
    ) {
      $this->setAttribute('city', $city->getSlug());

      return $city;
    }

    $city = CityTable::getDefaultCity();
    $this->setAttribute('city', $city->getSlug());

    return $city;
  }
}
