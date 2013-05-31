<h1 class="page-header">
  Список разделов
</h1>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Название раздела</th>
    </tr>
  </thead>
  <tbody><?php foreach ($pages as $page): ?>
    <tr>
      <td><a href="<?php echo url_for('page/show?id='.$page->getId()) ?>"><?php echo $page->getName() ?></a></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
