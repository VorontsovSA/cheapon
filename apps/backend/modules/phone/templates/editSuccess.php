<h1 class="page-header">
  Редактировать телефон поставщика <?php echo $phone->getProvider() ?>
</h1>

<?php include_partial('form', array('form' => $form, 'provider' => $phone->getProvider())) ?>
