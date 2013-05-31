<h1 class="page-header">
  Show Gallery
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('gallery/edit?id='.$gallery->getId()) ?>" class="btn btn-primary">Edit</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('gallery/index') ?>" class="btn">Back to List</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Id:</th>
      <td><?php echo $gallery->getId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Name:</th>
      <td><?php echo $gallery->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Provider:</th>
      <td><?php echo $gallery->getProviderId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created at:</th>
      <td><?php echo $gallery->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated at:</th>
      <td><?php echo $gallery->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created by:</th>
      <td><?php echo $gallery->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated by:</th>
      <td><?php echo $gallery->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Version:</th>
      <td><?php echo $gallery->getVersion() ?></td>
    </tr>
  </tbody>
</table>
