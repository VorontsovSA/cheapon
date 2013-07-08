<h1 class="page-header">
  Phones List
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('phone/new') ?>" class="btn btn-primary">New</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Provider</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody><?php foreach ($phones as $phone): ?>
    <tr>
      <td><a href="<?php echo url_for('phone/edit?id='.$phone->getId()) ?>"><?php echo $phone->getId() ?></a></td>
      <td><?php echo $phone->getProvider() ?></td>
      <td><?php echo $phone->getName() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
