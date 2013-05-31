<?php
  $links = array(
    'personal/profile' => 'Редактировать профиль',
    'personal/password' => 'Сменить пароль',
  );

  $currentModule = $sf_context->getModuleName();
  $currentAction = $sf_context->getActionName();
?>

<ul class="nav nav-tabs"><?php
  foreach ($links as $link => $anchor):
    list ($module, $action) = explode('/', $link);
?>
  <li<?php if ($module == $currentModule and $action == $currentAction) echo ' class="active"'; ?>><a href="<?php echo url_for($link) ?>"><?php echo $anchor ?></a></li>
<?php endforeach ?></ul>
