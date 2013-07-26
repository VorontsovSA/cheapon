<h1 class="page-header">
  Изменение изображения галереии поставщика <?php echo $image->getProvider() ?>
</h1>

<?php include_partial('form', array('form' => $form, 'provider' => $image->getProvider())) ?>
