<?php use_helper('I18N') ?>
<div class="span9 offset2">
  <div class="page-header">
    <h1>Авторизация</h1>
  </div>
  <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
</div>