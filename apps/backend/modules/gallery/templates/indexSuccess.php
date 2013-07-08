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
    </tr>
  </thead>
  <tbody><?php foreach ($gallerys as $gallery): ?>
    <tr>
      <td><a href="<?php echo url_for('gallery/show?id='.$gallery->getId()) ?>"><?php echo $gallery->getId() ?></a></td>
      <td><?php echo $gallery->getName() ?></td>
      <td><?php echo $gallery->getProvider() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
