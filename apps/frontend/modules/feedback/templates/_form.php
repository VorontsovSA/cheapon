<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-fluid" action="<?php echo url_for('feedback/'
  . ($form->getObject()->isNew() ? 'create' : 'update')
  . (!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : ''))
  ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

  <?php echo $form->renderUsing('bootstrap') ?>

  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif ?>

  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Отправить</button>
  </div>
</form>
