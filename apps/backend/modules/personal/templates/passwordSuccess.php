<h2 class="page-header">
  Личный кабинет
</h2>

<div class="tabbable tabs-top">
  <?php include_partial('nav') ?>

  <div class="tab-content">
    <div class="tab-pane active">
      <form class="form-horizontal" action="<?php echo url_for('personal/password') ?>" method="post">
        <?php echo $form->renderUsing('bootstrap') ?>

        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Сохранить</button>
        </div>
      </form>
    </div>
  </div>
</div>
