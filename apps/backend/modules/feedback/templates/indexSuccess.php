<h1 class="page-header">
  Список сообщений
</h1>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Дата</th>
      <th>ФИО</th>
      <th>Email</th>
      <th>Сообщение</th>
    </tr>
  </thead>
  <tbody><?php foreach ($feedbacks as $feedback): ?>
    <tr>
      <td nowrap><?php echo $feedback->getCreatedAt() ?></td>
      <td nowrap><?php echo $feedback->getName() ?></td>
      <td><?php echo $feedback->getEmail() ?></td>
      <td><?php echo $feedback->getMessage() ?></td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
