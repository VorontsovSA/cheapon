<?php

class myUser extends sfGuardSecurityUser
{
  public function getCity()
  {
    if ($this->getAttribute('city')) {
      return CityTable::findOneBySlug($this->getAttribute('city'));
    }

    if (true == ($geocity = ZapilGeo::getCity()) and true == ($city = CityTable::findOneByName($geocity))) {
      $this->setAttribute('city', $city->getSlug());

      return $city;
    }

    $city = CityTable::getDefaultCity();
    $this->setAttribute('city', $city->getSlug());

    return $city;
  }
}
