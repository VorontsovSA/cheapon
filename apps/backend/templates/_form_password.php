<form class="form-horizontal" action="<?php echo url_for('admin/changepassword'.(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '' )) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <fieldset>
    <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    
    <?php echo $form->renderUsing('bootstrap') ?>
    
    <div class="form-actions">
      <a href="<?php echo url_for($sf_user->getGuardUser()->getBackUrl()) ?>" class="btn">Вернуться к списку</a>
      <input type="submit" class="btn btn-primary" value="Сохранить"></a>
    </div>
  </fieldset>
</form>