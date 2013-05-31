<h1 class="page-header">
  Clients List
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('client/new') ?>" class="btn btn-primary">New</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Is signed</th>
      <th>City</th>
      <th>User</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody><?php foreach ($clients as $client): ?>
    <tr>
      <td><a href="<?php echo url_for('client/show?id='.$client->getId()) ?>"><?php echo $client->getId() ?></a></td>
      <td><?php echo $client->getIsSigned() ?></td>
      <td><?php echo $client->getCityId() ?></td>
      <td><?php echo $client->getUserId() ?></td>
      <td><?php echo $client->getCreatedAt() ?></td>
      <td><?php echo $client->getUpdatedAt() ?></td>
      <td><?php echo $client->getCreatedBy() ?></td>
      <td><?php echo $client->getUpdatedBy() ?></td>
      <td><?php echo $client->getVersion() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
