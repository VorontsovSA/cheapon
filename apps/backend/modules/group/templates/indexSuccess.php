<h1 class="page-header">
  Sf guard groups List
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('group/new') ?>" class="btn btn-primary">New</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody><?php foreach ($sf_guard_groups as $sf_guard_group): ?>
    <tr>
      <td><a href="<?php echo url_for('group/edit?id='.$sf_guard_group->getId()) ?>"><?php echo $sf_guard_group->getId() ?></a></td>
      <td><?php echo $sf_guard_group->getName() ?></td>
      <td><?php echo $sf_guard_group->getDescription() ?></td>
      <td><?php echo $sf_guard_group->getCreatedAt() ?></td>
      <td><?php echo $sf_guard_group->getUpdatedAt() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
