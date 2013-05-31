<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-horizontal" action="<?php echo url_for('provider/user'.($form->getObject()->isNew() ? 'Create' : 'Update').'?id='.$provider->getId().(!$form->getObject()->isNew() ? '&uid='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif ?>

  <?php echo $form->renderUsing('bootstrap') ?>

  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Сохранить</button>

    <a class="btn" href="<?php echo url_for('provider/show?id='.$provider->getId()) ?>">Вернуться к просмотру</a>

    <?php if (!$form->getObject()->isNew() && $sf_user->hasCredential('user_delete')): ?>
      <?php echo link_to('Удалить', 'provider/userDelete?uid='.$form->getObject()->getId().'&id='.$provider->getId(), array('class' => 'btn btn-warning pull-right', 'method' => 'delete', 'confirm' => 'Вы уверены?')) ?>
    <?php endif ?>
  </div>
</form>
