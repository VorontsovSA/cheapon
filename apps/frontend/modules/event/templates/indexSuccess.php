<div class="alert alert-info">
  <ul>
    <li>Фильтр прошедшие/текущие</li>
    <li>Прошедшие → категории</li>
    <li>Чё делать с пустыми категориями?</li>
    <li>Заменить вёрстку плиток</li>
  </ul>
</div>

<div class="text-center">
  <?php include_partial('categories', array('categories' => $categories)) ?>
</div>

<div class="mega-cells">
  <?php if ($events and count($events)): foreach ($events as $i => $event): ?>
    <?php if (!$i or ($i+1 % 3) == 0): ?>
      <div class="row">
    <?php endif ?>
        <div class="cell span6 mega-border" style="background-image: url(/uploads/eventimages/<?php echo $event->getPhoto1() ?>)">
          <div class="description">
            <div class="description-short">
              <?php echo $event->getName() ?>
            </div>

            <div class="description-full">
              <?php echo $event->getFullName() ?>
            </div>

            <div class="counters">
              <span class="eta"><?php echo $event->getETA() ?></span>
              <span class="comments"><?php echo $event->getCommentsCount() ?></span>
              <span class="likes"><?php echo $event->getLikesCount() ?></span>
            </div>
          </div>

          <div class="row buy-me-faster">
            <div class="discount span2">
              <?php echo $event->getDiscount() ?><span class="percent">%</span>
            </div>
            <div class="price span2">
              <?php echo $event->getPrice() ?><span class="currency">руб.</span>
            </div>
            <div class="buy span2">
              <a href="<?php echo url_for('@show-event?id=' . $event->getId()) ?>" class="btn">Купить</a>
            </div>
          </div>
        </div>
    <?php if (($i+1 % 3) == 0): ?>
      </div>
    <?php endif ?>
  <?php endforeach; else: ?>
    <div class="alert alert-info">No events</div>
  <?php endif ?>
</div>
