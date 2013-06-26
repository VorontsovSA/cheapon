<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-horizontal" action="<?php echo url_for('event/'
  . ($form->getObject()->isNew() ? 'create' : 'update')
  . 'category'
  . (!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : ''))
  ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

  <?php echo $form->renderUsing('bootstrap') ?>

  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif ?>

  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="<?php echo url_for('event/categories') ?>" class="btn">Вернуться к списку</a>

    <?php if (!$form->getObject()->isNew()): ?>
      <?php echo link_to('Удалить', 'event/deletecategory?id='.$form->getObject()->getId(), array(
        'method' => 'delete',
        'confirm' => 'Вы уверены?',
        'class' => 'btn btn-warning pull-right',
      )) ?>
    <?php endif ?>
  </div>
</form>