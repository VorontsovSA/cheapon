<?php

class sfGuardRegisterComponents extends sfComponents
{
  public function executeForm()
  {
    $this->form = new sfGuardRegisterForm();
  }
}
