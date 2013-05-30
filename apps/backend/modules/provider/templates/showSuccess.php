<h1 class="page-header">
  Show Provider
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('provider/edit?id='.$provider->getId()) ?>" class="btn btn-primary">Edit</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('provider/index') ?>" class="btn">Back to List</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Id:</th>
      <td><?php echo $provider->getId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Name:</th>
      <td><?php echo $provider->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Short description:</th>
      <td><?php echo $provider->getShortDescription() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Full description:</th>
      <td><?php echo $provider->getFullDescription() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Url:</th>
      <td><?php echo $provider->getUrl() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">E mail:</th>
      <td><?php echo $provider->getEMail() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Business hours:</th>
      <td><?php echo $provider->getBusinessHours() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Address:</th>
      <td><?php echo $provider->getAddress() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">City:</th>
      <td><?php echo $provider->getCityId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">User:</th>
      <td><?php echo $provider->getUserId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created at:</th>
      <td><?php echo $provider->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated at:</th>
      <td><?php echo $provider->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created by:</th>
      <td><?php echo $provider->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated by:</th>
      <td><?php echo $provider->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Version:</th>
      <td><?php echo $provider->getVersion() ?></td>
    </tr>
  </tbody>
</table>
