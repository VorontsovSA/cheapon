<div class="alert alert-info">
  <ul>
    <li>Осталось 3 купона!</li>
  </ul>
</div>

<div class="text-center">
  <ul class="nav nav-pills" style="display:inline-block">
    <li><a href="<?php echo url_for('@events?category=' . $event->getCategory()->getSlug() . '&type=' . (strtotime($event->getSaleEnd()) <= time() ? 'active' : 'past')) ?>">Назад</a></li>
  </ul>

  <h1 class="superheader m0"><?php echo $event ?></h1>
  <h5>Купон действует с <?php echo $event->getActiveDates()['from'] ?> по <?php echo $event->getActiveDates()['to'] ?></h5>
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

  <div id="gallery" class="provider-gallery carousel slide">
    <div class="carousel-inner"><?php foreach ($sf_data->getRaw('event')->getProvider()->getImages() as $i => $image): ?>
      <div class="item<?php if ($i === 0) echo ' active' ?>">
        <img src="/uploads/providerimages/<?php echo $image->getFile() ?>" alt="">
      </div>
    <?php endforeach ?></div>
    <a class="left carousel-control" href="#gallery" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#gallery" data-slide="next">›</a>
  </div>

  <div class="row address-info fuck-you-padding text-center">
    <div class="span6 address"><?php if ($event->getProvider()->getAddress()): ?>
      <p><?php echo $event->getProvider()->getAddress() ?></p>

      <a href="#" class="map-toggler">Показать на карте</a>
    <?php endif ?></div>
    <div class="span6 phone">
      <p>
        Контактная информация: <br />
        <?php echo $event->getProvider()->getPhones() ?>
      </p>
      <p>
        <?php if ($event->getProvider()->getUrl()): ?>
          <?php echo $event->getProvider()->getUrl() ?><br />
        <?php endif ?>
        <?php if ($event->getProvider()->get('e_mail')): ?>
          <a href="mailto:<?php echo $event->getProvider()->get('e_mail') ?>"><?php echo $event->getProvider()->get('e_mail') ?></a>
        <?php endif ?>
      </p>
    </div>
    <div class="span6 clock"><?php if ($event->getProvider()->getBusinessHours()): ?>
      Часы работы: <br />
      <?php echo $event->getProvider()->getBusinessHours() ?>
    <?php endif ?></div>
  </div>

  <div class="striped-head">
    <h3>Комментарии</h3>
  </div>
  <?php if ($event->getComments()): ?>
    <ul class="media-list">
      <?php foreach ($event->getComments() as $comment): ?>
        <li class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="http://lorempixel.com/64/64/?1">
          </a>
          <div class="media-body">
            <h4 class="media-heading muted"><?php echo $comment->getCreator() ?>, <?php echo date('d.m.Y H:i', strtotime($comment->getCreatedAt())) ?></h4>
            <p><?php echo $comment ?></p>

            <?php if ($comment->getAnswer()): ?>
              <div class="media well">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://lorempixel.com/64/64/?2">
                </a>
                <div class="media-body">
                  <h4 class="media-heading muted"><?php echo $comment->getModerator() ?>, <?php echo date('d.m.Y H:i', strtotime($comment->getAnsweredAt())) ?></h4>
                  <p><?php echo $comment->getAnswer() ?></p>
                </div>
             </div>
           <?php endif ?>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>

  <form action="<?php echo url_for('feedback/comment') ?>" class="text-center">
    <?php echo $form->renderUsing('bootstrap') ?>
    <button type="submit" class="btn">Добавить комментарий</button>
  </form>
</div>
