<h1 class="page-header">
  Просмотр информации о разделе
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('page/edit?id='.$page->getId()) ?>" class="btn btn-primary">Редактировать</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('page/index') ?>" class="btn">Вернуться к списку</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Название раздела:</th>
      <td><?php echo $page->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Имя в адресе:</th>
      <td><?php echo $page->getSlug() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Контент:</th>
      <td><?php echo $page->getContent() ?></td>
    </tr>
  </tbody>
</table>
