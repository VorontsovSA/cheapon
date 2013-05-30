<h1 class="page-header">
  Список поставщиков
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('provider/new') ?>" class="btn btn-primary">Создать</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Название</th>
      <th>Город</th>
    </tr>
  </thead>
  <tbody><?php foreach ($providers as $provider): ?>
    <tr>
      <td><a href="<?php echo url_for('provider/show?id='.$provider->getId()) ?>"><?php echo $provider->getName() ?></a></td>
      <td><?php echo $provider->getCityId() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
