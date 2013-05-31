<?php

class ProfileForm extends sfGuardUserForm
{
  public function configure()
  {
    $this->useFields(array(
      'id',
      'last_name',
      'first_name',
    ));

    $this->getWidgetSchema()
      ->setLabels(array(
        'last_name' => 'Фамилия',
        'first_name' => 'Имя',
      ))
    ;
  }
}
