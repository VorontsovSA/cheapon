<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <div class="control-group">
    <?php echo $form['username']->render() ?>
  </div>
  <div class="control-group">
    <div class="input-append">
      <?php echo $form['password']->render() ?>
      <span class="add-on"><span class="icon icon-question-sign"></span></span>
    </div>
  </div>
  <div class="form-actions">
    <?php echo $form->renderHiddenFields(false) ?>
    <button type="submit" class="btn btn-primary">Войти</button>
    или
    <a href="<?php echo url_for('@sf_guard_register') ?>" class="">Регистрация</a>
  </div>
  <h3>Быстрый вход через социальные сети</h3>
  <div class="login-helpers">
    <a href="" class="btn btn-facebook">Войти</a>
    <a href="" class="btn btn-vk">Войти</a>
    <a href="" class="btn btn-twitter">Войти</a>
    <a href="#" class="btn btn-circle"><i class="icon icon-plus"></i></a>
  </div>
</form>
