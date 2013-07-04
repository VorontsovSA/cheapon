<h1 class="page-header">
  Categorys List
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('category/new') ?>" class="btn btn-primary">New</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Sort</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody><?php foreach ($categorys as $category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/edit?id='.$category->getId()) ?>"><?php echo $category->getId() ?></a></td>
      <td><?php echo $category->getName() ?></td>
      <td><?php echo $category->getSort() ?></td>
      <td><?php echo $category->getCreatedAt() ?></td>
      <td><?php echo $category->getUpdatedAt() ?></td>
      <td><?php echo $category->getCreatedBy() ?></td>
      <td><?php echo $category->getUpdatedBy() ?></td>
      <td><?php echo $category->getVersion() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
