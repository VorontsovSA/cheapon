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
      <th>Количество поставщиков</th>
      <th>Количество клиентов</th>
    </tr>
  </thead>
  <tbody><?php foreach ($citys as $city): ?>
    <tr>
      <td><a href="<?php echo url_for('city/edit?id='.$city->getId()) ?>"><?php echo $city->getName() ?></a></td>
      <td><span class="badge badge-info"><?php echo $city->getProviderCount() ?></span></td>
      <td><span class="badge badge-info"><?php echo $city->getClientCount() ?></span></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
