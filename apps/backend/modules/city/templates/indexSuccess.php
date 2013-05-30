<h1 class="page-header">
  Список городов
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('city/new') ?>" class="btn btn-primary">Создать</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Название</th>
    </tr>
  </thead>
  <tbody><?php foreach ($citys as $city): ?>
    <tr>
      <td><a href="<?php echo url_for('city/show?id='.$city->getId()) ?>"><?php echo $city->getName() ?></a></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
