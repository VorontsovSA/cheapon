<h1 class="page-header">
  Show Client
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('client/edit?id='.$client->getId()) ?>" class="btn btn-primary">Edit</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('client/index') ?>" class="btn">Back to List</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Id:</th>
      <td><?php echo $client->getId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Is signed:</th>
      <td><?php echo $client->getIsSigned() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">City:</th>
      <td><?php echo $client->getCityId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">User:</th>
      <td><?php echo $client->getUserId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created at:</th>
      <td><?php echo $client->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated at:</th>
      <td><?php echo $client->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created by:</th>
      <td><?php echo $client->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated by:</th>
      <td><?php echo $client->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Version:</th>
      <td><?php echo $client->getVersion() ?></td>
    </tr>
  </tbody>
</table>
