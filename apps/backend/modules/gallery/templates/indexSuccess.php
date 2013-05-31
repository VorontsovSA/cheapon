<h1 class="page-header">
  Gallerys List
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('gallery/new') ?>" class="btn btn-primary">New</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Provider</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody><?php foreach ($gallerys as $gallery): ?>
    <tr>
      <td><a href="<?php echo url_for('gallery/show?id='.$gallery->getId()) ?>"><?php echo $gallery->getId() ?></a></td>
      <td><?php echo $gallery->getName() ?></td>
      <td><?php echo $gallery->getProviderId() ?></td>
      <td><?php echo $gallery->getCreatedAt() ?></td>
      <td><?php echo $gallery->getUpdatedAt() ?></td>
      <td><?php echo $gallery->getCreatedBy() ?></td>
      <td><?php echo $gallery->getUpdatedBy() ?></td>
      <td><?php echo $gallery->getVersion() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
