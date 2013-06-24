<h1 class="page-header">
  Список категорий
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('event/newcategory') ?>" class="btn btn-primary">Создать</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('event/index') ?>" class="btn">Вернуться к списку акций</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Название</th>
      <th>Количество акций</th>
    </tr>
  </thead>
  <tbody><?php foreach ($categories as $category): ?>
    <tr>
      <td><a href="<?php echo url_for('event/editcategory?id='.$category->getId()) ?>"><?php echo $category->getName() ?></a></td>
      <td><span class="badge badge-info"><?php echo $category->getEventsCount() ?></span></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
