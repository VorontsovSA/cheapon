<h1 class="page-header">
  Список акций
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('event/new') ?>" class="btn btn-primary">Создать</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Название</th>
      <th>Поставщик</th>
      <th>Размер скидки</th>
      <th>Цена купона</th>
      <th>Начало действия акции</th>
      <th>Окончание действия акции</th>
      <th>Начало продажи купонов</th>
      <th>Окончание продажи купонов</th>
      <th>Опубликована</th>
      <th>Продано купонов</th>
      <th>Сообщения</th>
    </tr>
  </thead>
  <tbody><?php foreach ($events as $event): ?>
    <tr>
      <td><a href="<?php echo url_for('event/show?id='.$event->getId()) ?>"><?php echo $event->getName() ?></a></td>
      <td><a href="<?php echo url_for('provider/show?id='.$event->getProvider()->getId()) ?>"><?php echo $event->getProvider()->getName() ?></a></td>
      <td><?php echo $event->getDiscount() ?></td>
      <td><?php echo $event->getPrice() ?></td>
      <td><?php echo date('Y-m-d', strtotime($event->getEventStart())) ?></td>
      <td><?php echo date('Y-m-d', strtotime($event->getEventEnd())) ?></td>
      <td><?php echo date('Y-m-d', strtotime($event->getSaleStart())) ?></td>
      <td><?php echo date('Y-m-d', strtotime($event->getSaleEnd())) ?></td>
      <td><?php echo ($event->getIsActive())?'<i class="icon-ok"></i>':'' ?></td>
      <td><span class="badge badge-info"><?php echo $event->getCouponsCount() ?></span></td>
      <td><span class="badge badge-success"><?php $commentsCount = $event->getCommentsCount(); echo $commentsCount ?></span><?php if($commentsCount - ($readCommentCount = $event->getReadCount($sf_user->getGuardUser()->getId())) > 0):?>/<span class="badge badge-warning"><?php echo $commentsCount - $readCommentCount ?></span><?php endif ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
