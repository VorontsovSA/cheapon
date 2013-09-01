<?php

/**
 * main actions.
 *
 * @package    cheapon
 * @subpackage main
 * @author     slowpokes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  public function executeRedirect(sfWebRequest $request)
  {
    $this->redirect('@events', 301);
  }
}
