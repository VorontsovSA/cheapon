<h1 class="page-header">
  Show Event
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('event/edit?id='.$event->getId()) ?>" class="btn btn-primary">Edit</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('event/index') ?>" class="btn">Back to List</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Id:</th>
      <td><?php echo $event->getId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Name:</th>
      <td><?php echo $event->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Full name:</th>
      <td><?php echo $event->getFullName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Discount:</th>
      <td><?php echo $event->getDiscount() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Price:</th>
      <td><?php echo $event->getPrice() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Conditions:</th>
      <td><?php echo $event->getConditions() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Description:</th>
      <td><?php echo $event->getDescription() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Event start:</th>
      <td><?php echo $event->getEventStart() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Event end:</th>
      <td><?php echo $event->getEventEnd() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Sale start:</th>
      <td><?php echo $event->getSaleStart() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Sale end:</th>
      <td><?php echo $event->getSaleEnd() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Is active:</th>
      <td><?php echo $event->getIsActive() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Photo1:</th>
      <td><?php echo $event->getPhoto1() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Photo2:</th>
      <td><?php echo $event->getPhoto2() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Photo3:</th>
      <td><?php echo $event->getPhoto3() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Provider:</th>
      <td><?php echo $event->getProviderId() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created at:</th>
      <td><?php echo $event->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated at:</th>
      <td><?php echo $event->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Created by:</th>
      <td><?php echo $event->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Updated by:</th>
      <td><?php echo $event->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Version:</th>
      <td><?php echo $event->getVersion() ?></td>
    </tr>
  </tbody>
</table>
