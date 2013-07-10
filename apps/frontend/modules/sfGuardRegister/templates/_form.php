<form action="" method="post" class="">
  <?php echo $form->renderUsing('bootstrap') ?>

  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Я соглашаюсь с условиями договора <a href="<?php echo url_for('@page?slug=user-agreement') ?>" target="_blank">Публичной оферты</a>
      </label>
    </div>
  </div>

  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Регистрация</button>
  </div>
</form>
