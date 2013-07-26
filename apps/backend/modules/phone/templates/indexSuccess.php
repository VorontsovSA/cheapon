<h1 class="page-header">
  Список телефонов поставщика <?php echo $provider ?>
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('phone/new?id='.$provider->getId()) ?>" class="btn btn-primary">Создать</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('provider/show?id='.$provider->getId()) ?>" class="btn">Вернуться к информации о поставщике</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Телефон</th>
    </tr>
  </thead>
  <tbody><?php foreach ($phones as $phone): ?>
    <tr>
      <td><a href="<?php echo url_for('phone/edit?id='.$phone->getId()) ?>"><?php echo $phone->getName() ?></a></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
