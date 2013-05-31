<h2 class="page-header">
  <?php echo $provider->getName() ?>
  <small>Редактирование пользователя</small>
</h2>

<?php include_partial('userform', array('form' => $form, 'provider' => $provider)) ?>
