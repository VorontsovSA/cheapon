<?php

class ZapilGeo
{
  public static function getCity($ip=null)
  {
    $context = stream_context_create(array(
      'http' => array(
        'timeout' => 1, // seconds
      )
    ));
    $json = file_get_contents('http://geo.zapil.im/?ip=' . ($ip ?: $_SERVER['REMOTE_ADDR']), false, $context);

    $result = json_decode($json, true);

    return $result ? $result['fluent']['city'] : false;
  }
}
