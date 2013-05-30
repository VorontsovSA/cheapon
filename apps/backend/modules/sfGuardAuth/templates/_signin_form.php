<?php use_helper('I18N') ?>
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="form-horizontal">
    <fieldset>
      <?php if($form->hasGlobalErrors()): ?>
        <div class="alert alert-danger">
          <a class="close" data-dismiss="alert">×</a>
          <strong><?php echo $form->renderGlobalErrors() ?></strong>
        </div>
      <?php endif; ?>
      <?php echo $form->renderHiddenFields(false) ?>
      <div class="control-group <?php echo ($form['username']->hasError()) ? 'error' : ''?>">
        <label class="control-label" for="<?php echo $form['username']->renderId() ?>"><?php echo $form['username']->renderLabelName() ?></label>
        <div class="controls">
          <?php echo $form['username']->render() ?>
          <span class="help-inline"><?php echo $form['username']->renderError() ?></span>
        </div>
        
      </div>
      <div class="control-group <?php echo ($form['password']->hasError()) ? 'error' : ''?>">
        <label class="control-label" for="<?php echo $form['password']->renderId() ?>"><?php echo $form['password']->renderLabelName() ?></label>
        <div class="controls">
          <?php echo $form['password']->render() ?>
          <span class="help-inline"><?php echo $form['password']->renderError() ?></span>
        </div>
        
      </div>
      <div class="control-group <?php echo ($form['remember']->hasError()) ? 'error' : ''?>">
        <label class="control-label" for="<?php echo $form['remember']->renderId() ?>"><?php echo $form['remember']->renderLabelName() ?></label>
        <div class="controls">
          <?php echo $form['remember']->render() ?>
          <span class="help-inline"><?php echo $form['remember']->renderError() ?></span>
        </div>
        
      </div>
      <div class="form-actions">
        <input type="submit" class="btn btn-primary" value="<?php echo __('Signin') ?>" />
      </div>
    </fieldset>
    
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          
          
          <?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?') ?></a>
          <?php endif; ?>

          <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?') ?></a>
          <?php endif; ?>
        </td>
      </tr>
    </tfoot>
  </table>
</form>