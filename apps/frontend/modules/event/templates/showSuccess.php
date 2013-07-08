<div class="alert alert-info">
  <ul>
    <li>Назад</li>
    <li>Осталось 3 купона!</li>
    <li>Купон действует с 30 августа по 15 сентября</li>
    <li>Галерея поставщика</li>
    <li>Контакты поставщика</li>
    <li>Лента коментов</li>
    <li>Добавление комента</li>
  </ul>
</div>

<div class="text-center">
  <ul class="nav nav-pills" style="display:inline-block">
    <li><a href="">Назад</a></li>
  </ul>

  <h1 class="superheader m0"><?php echo $event ?></h1>
  <h5>DUMMY: Купон действует с 30 августа по 15 сентября</h5>
</div>

<div class="mega-border page with-grafon-zbs">
  <div class="grafon-zbs" style="background-image: url(/uploads/eventimages/<?php echo $event->getPhoto2() ?>)">
    <div class="second-bg" style="background-image: url(/uploads/eventimages/<?php echo $event->getPhoto3() ?>)"></div>
    <div class="take-the-last">
      <span>Осталось 3 купона!</span>
    </div>
    <div class="centrota">
      <div class="discount">
        <?php echo $event->getDiscount() ?><span class="percent">%</span>
      </div>
      <div class="price">
        <?php echo $event->getPrice() ?><span class="currency">руб.</span>
      </div>
      <div class="buy">
        <a href="" class="btn">Купить купон</a>
      </div>
    </div>
    <div class="nizota">
      <div class="eta">
        <?php echo $event->getETA() ?>
      </div>
      <div class="comments">
        <?php echo $event->getCommentsCount() ?>
      </div>
      <div class="likes">
        <?php echo $event->getLikesCount() ?>
      </div>
    </div>
  </div>

  <?php if ($event->getConditions()): ?>
    <div class="striped-head">
      <h3>Условия</h3>
    </div>
    <?php echo $event->getConditions() ?>
  <?php endif ?>

  <?php if ($event->getDescription()): ?>
    <div class="striped-head">
      <h3>Описание</h3>
    </div>
    <?php echo $event->getDescription() ?>
  <?php endif ?>

  <div class="striped-head">
    <h3><?php echo $event->getProvider() ?></h3>
  </div>
  <?php if ($event->getProvider()->getShortDescription()): ?>
    <?php echo $event->getProvider()->getShortDescription() ?>
  <?php endif ?>

  <img src="http://lorempixel.com/1050/440/?1" alt="" />

  <h1 class="text-center" style="color:red">Контактная информация</h1>

  <div class="striped-head">
    <h3>Комментарии</h3>
  </div>
  <ul class="media-list">
    <li class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://lorempixel.com/64/64/?1">
      </a>
      <div class="media-body">
        <h4 class="media-heading muted">Alexander Nevmerejskiy, 22 мая 2013  32:48</h4>
        <p>Открывает двери для всех ценителей вкусной и здоровой пищи, для тех, кому важна уютная атмосфера и внимательное обслуживание персонала?</p>

        <div class="media well">
          <a class="pull-left" href="#">
            <img class="media-object" src="http://lorempixel.com/64/64/?2">
          </a>
          <div class="media-body">
            <h4 class="media-heading muted">Cheapon, 22 мая 2013  32:48</h4>
            <p>Да! Двери для всех ценителей вкусной и здоровой пищи, для тех, кому важна уютная атмосфера и внимательное обслуживание персонала!</p>
          </div>
       </div>
      </div>
    </li>
  </ul>
  <form class="text-center">
    <textarea name="" id="" cols="30" rows="10">Ваш комментарий…</textarea><br />
    <button type="submit" class="btn">Добавить комментарий</button>
  </form>
</div>
