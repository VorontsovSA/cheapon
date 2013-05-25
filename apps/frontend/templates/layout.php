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
  <div id="header" class="container">
    <div class="login-bar hide">
      <form action="" class="form-inline">
        <input type="email" name="" id="" placeholder="Эл. почта" />
        <input type="password" name="" id="" placeholder="Пароль" />
        <button type="submit" class="btn">Войти</button>
        <a href="">Регистрация</a>
      </form>

      <div class="login-helpers">
        <a href="" class="btn btn-facebook">Войти</a>
        <a href="" class="btn btn-vk">Войти</a>
        <a href="#" class="btn btn-circle"><i class="icon icon-plus"></i></a>
      </div>

      <a href="#" class="btn-closer">×</a>
    </div>

    <div class="choose-city-bar hide">
      <ul class="unstyled">
        <li><a href="">Москва</a></li>
        <li><a href="">Санкт-Петербург</a></li>
        <li><a href="">Архангельск</a></li>
        <li><a href="">Астрахань</a></li>
        <li><a href="">Барнаул</a></li>
      </ul>
    </div>

    <div class="head-nav">
      <ul class="nav nav-pills">
        <li class="active"><a href="">Текущие акции</a></li>
        <li><a href="">Прошедшие акции</a></li>
      </ul>

      <div class="mega-basket">
        <a href="" class="city-chooser">Владивосток</a>
        <a href="<?php echo url_for('@homepage') ?>" class="logo">Cheapon</a>
        <a href="" class="basket">
          <span class="counter">0</span>
        </a>
      </div>

      <ul class="nav nav-pills">
        <li><a href="">Как это работает</a></li>
        <li><a href="">Для бизнеса</a></li>
      </ul>
    </div>
  </div>

  <div id="content" class="container">
    <?php echo $sf_content ?>
  </div>

  <div id="footer" class="container">
    <div class="striped-head text-center">
      <div class="subhead muted">Контактный телефон</div>
      <div class="head">+7<span class="bullet"></span>914<span class="bullet"></span>961<span class="bullet"></span>96<span class="bullet"></span>98</div>
    </div>

    <div class="row footer-navs">
      <ul class="span6 nav nav-list" style="padding-left:0; padding-right:0">
        <li class="nav-header">Что такое «CHEAPON»</li>
        <li><a href="">Как это работает</a></li>
        <li><a href="">О компании</a></li>
        <li><a href="">Вакансии</a></li>
        <li><a href="">Контакты и реквизиты</a></li>
      </ul>

      <ul class="span6 nav nav-list" style="padding-left:0; padding-right:0">
        <li class="nav-header">Для бизнеса</li>
        <li><a href="">Привлечение клиентов</a></li>
        <li><a href="">Предложить свое заведение</a></li>
      </ul>

      <ul class="span6 nav nav-list" style="padding-left:0; padding-right:0">
        <li class="nav-header">Для клиентов</li>
        <li><a href="">Вопросы и ответы</a></li>
        <li><a href="">Пользовательское соглашение</a></li>
      </ul>
    </div>

    <div class="row footer-last">
      <div class="span6 text-left who-we-are muted">
        © ООО «Cheapon», <?php echo date('Y') ?>  <br />
        Скидки в Чите, товары и услуги со скидками
      </div>

      <div class="span6 text-center muted">
        visa
        mastercard
        yabablo
        webmanya
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
</body>

</html>
