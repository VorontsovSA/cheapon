<h1 class="page-header">
  Список изображений галереи поставщика <?php echo $provider ?>
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('image/new?id='.$provider->getId()) ?>" class="btn btn-primary">Создать</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('provider/show?id='.$provider->getId()) ?>" class="btn">Вернуться к информации о поставщике</a>
  </div>
</div>

<table class="table table-width-auto table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Изображение</th>
    </tr>
  </thead>
  <tbody><?php foreach ($images as $image): ?>
    <tr>
      <td><a href="<?php echo url_for('image/edit?id='.$image->getId()) ?>"><img src="<?php echo '/uploads/providerimages/'.($image->getFile()?:'noimage.gif') ?>" width="400" /></a></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
