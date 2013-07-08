<h1 class="page-header">
  Images List
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('image/new') ?>" class="btn btn-primary">New</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>File</th>
      <th>Gallery</th>
    </tr>
  </thead>
  <tbody><?php foreach ($images as $image): ?>
    <tr>
      <td><a href="<?php echo url_for('image/edit?id='.$image->getId()) ?>"><?php echo $image->getId() ?></a></td>
      <td><?php echo $image->getFile() ?></td>
      <td><?php echo $image->getGallery() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
