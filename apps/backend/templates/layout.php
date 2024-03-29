<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a href="<?php echo url_for('@homepage') ?>" class="brand">Cheapon</a>
        <?php include_partial('global/topnav') ?>

        <?php if ($sf_user->isAuthenticated()): ?>
        <ul class="nav pull-right no-margin">
          <li id="fat-menu" class="dropdown">
            <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo $sf_user->getGuardUser()->getFirstName() ?> <?php echo $sf_user->getGuardUser()->getLastName() ?><b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
              <li><a href="<?php echo url_for('personal/profile') ?>">Редактировать профиль</a></li>
              <li><a href="<?php echo url_for('personal/password') ?>">Изменить пароль</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo url_for('@sf_guard_signout') ?>">Выход</a></li>
            </ul>
          </li>
        </ul>
        <?php endif ?>
      </div>
    </div>
  </div>

  <?php if ($sf_user->hasFlash('flash') and true == ($flash = $sf_user->getFlash('flash'))): ?>
    <div class="alert alert-<?php echo $flash['type'] ?>">
      <?php echo $flash['message'] ?>
      <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
  <?php endif ?>

  <section id="content">
    <div class="container-fluid navbar-inner" style="background-color: #fff; background-image: none">
      <?php echo $sf_content ?>
    </div>
  </section>

  <footer id="footer">
    <div class="container" style="padding-top: 7em">
      Powered by <a href="http://github.com/b1rdex/symfony1">Symfony 1.4 "slowpoke" edition</a>
    </div>
  </footer>
</body>

</html>
