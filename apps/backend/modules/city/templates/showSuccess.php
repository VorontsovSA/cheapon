<h1 class="page-header">
  Show City
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('city/edit?id='.$city->getId()) ?>" class="btn btn-primary">Edit</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('city/index') ?>" class="btn">Back to List</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Id:</th>
      <td><?php echo $city->getId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Name:</th>
      <td><?php echo $city->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created at:</th>
      <td><?php echo $city->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated at:</th>
      <td><?php echo $city->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created by:</th>
      <td><?php echo $city->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated by:</th>
      <td><?php echo $city->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Version:</th>
      <td><?php echo $city->getVersion() ?></td>
    </tr>
  </tbody>
</table>
