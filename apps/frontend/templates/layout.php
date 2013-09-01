<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:700&subset=cyrillic' rel='stylesheet' type='text/css'>
  <?php include_javascripts() ?>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div id="header">
    <div class="container">
      <div class="head-nav clearfix">
        <div class="pull-left">
          <ul class="nav nav-pills">
            <?php $currentRouteName = $sf_context->getRouting()->getCurrentRouteName() ?>
            <li <?php if ($currentRouteName === 'events' and $sf_request->getParameter('type') === 'active') echo ' class="active"' ?>>
              <a href="<?php echo url_for('@events') ?>">Текущие акции</a>
            </li>
            <li <?php if ($currentRouteName === 'events' and $sf_request->getParameter('type') === 'past') echo ' class="active"' ?>>
              <a href="<?php echo url_for('@events?type=past') ?>">Прошедшие акции</a>
            </li>
          </ul>
        </div>

        <div class="mega-basket">
          <a href="<?php echo url_for('city/modal') ?>" class="city-chooser" title="<?php echo $sf_user->getCity() ?>" data-toggle="modal" data-target="#city-chooser-modal">Владивосток</a>
          <a href="<?php echo url_for('@homepage') ?>" class="logo hide-text" title="На главную страницу">Cheapon</a>
          <a href="" class="basket" onclick="$(this).find('.counter').text(Math.round(Math.random()*10+3)); return false">
            <span class="counter img-circle">0</span>
          </a>
        </div>

        <div class="pull-right">
          <ul class="nav nav-pills">
            <li<?php if ($sf_context->getModuleName() == 'page' and $sf_request->getParameter('slug') == 'how-it-works') echo ' class="active"' ?>><a href="<?php echo url_for('@page?slug=how-it-works') ?>">Как это работает</a></li>
            <li<?php if ($sf_context->getModuleName() == 'page' and $sf_request->getParameter('slug') == 'client-attraction') echo ' class="active"' ?>><a href="<?php echo url_for('@page?slug=client-attraction') ?>">Для бизнеса</a></li>
            <li>
              <?php if ($sf_user->isAuthenticated()): ?>
                <a href="#">Вошёл!</a>
              <?php else: ?>
                <a href="<?php echo url_for('sfGuardAuth/modal') ?>" class="btn m0" data-toggle="modal" data-target="#login-form-modal">Вход</a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="content">
    <div class="container">
      <?php if ($sf_user->hasFlash('flash') and true == ($flash = $sf_user->getFlash('flash'))): ?>
        <div class="alert alert-<?php echo $flash['type'] ?>">
          <?php echo $flash['message'] ?>
          <button type="button" class="close" data-dismiss="alert">×</button>
        </div>
      <?php endif ?>

      <?php echo $sf_content ?>
    </div>
  </div>

  <div id="footer">
    <div class="container">
      <div class="striped-head">
        <h1 class="head">
          <span>+7<span class="bullet"></span>914<span class="bullet"></span>961<span class="bullet"></span>96<span class="bullet"></span>98</span>
          <div class="subhead muted">Контактный телефон</div>
        </h1>
      </div>

      <div class="row footer-navs">
        <ul class="span6 nav nav-list">
          <li class="nav-header">Что такое «CHEAPON»</li>
          <li><a href="<?php echo url_for('@page?slug=how-it-works') ?>">Как это работает</a></li>
          <li><a href="<?php echo url_for('@page?slug=about') ?>">О компании</a></li>
          <li><a href="<?php echo url_for('@page?slug=we-are-hiring') ?>">Вакансии</a></li>
          <li><a href="<?php echo url_for('@feedback') ?>">Контакты и реквизиты</a></li>
        </ul>

        <ul class="span6 nav nav-list">
          <li class="nav-header">Для бизнеса</li>
          <li><a href="<?php echo url_for('@page?slug=client-attraction') ?>">Привлечение клиентов</a></li>
          <li><a href="<?php echo url_for('@page?slug=offering') ?>">Предложить свое заведение</a></li>
        </ul>

        <ul class="span6 nav nav-list">
          <li class="nav-header">Для клиентов</li>
          <li><a href="<?php echo url_for('@faq') ?>">Вопросы и ответы</a></li>
          <li><a href="<?php echo url_for('@page?slug=user-agreement') ?>">Пользовательское соглашение</a></li>
        </ul>
      </div>

      <div class="row footer-last">
        <div class="span6 text-left who-we-are muted">
          © ООО «Cheapon», <?php echo date('Y') ?>  <br />
          Скидки в Чите, товары и услуги со скидками
        </div>

        <div class="span6 text-center money-we-accept muted">
          <img src="/img/money-we-accept.png" alt="visa, mastercard, yandex.money, webmoney" />
        </div>

        <div class="span6 text-right follow-the-white-rabbit muted">
          Следите за акциями:
          <a href="" class="btn bnt-circle"><i class="icon icon-vk"></i></a>
          <a href="" class="btn bnt-circle"><i class="icon icon-fb"></i></a>
          <a href="" class="btn bnt-circle"><i class="icon icon-tw"></i></a>
          <a href="" class="btn bnt-circle"><i class="icon icon-plus"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal hide fade" id="city-chooser-modal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2>Выберите город</h2>
    </div>
    <div class="modal-body">
      <p>Загрузка…</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn" data-dismiss="modal">Закрыть</a>
    </div>
  </div>

  <div class="modal hide fade" id="login-form-modal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2>Авторизация</h2>
      <h3>Чтобы купить купоны вам нужно авторизоваться на сайте</h3>
    </div>
    <div class="modal-body">
      <p>Загрузка…</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn" data-dismiss="modal">Закрыть</a>
    </div>
  </div>
</body>
</html>
