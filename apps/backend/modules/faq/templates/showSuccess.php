<h1 class="page-header">
  Просмотр вопроса
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('faq/edit?id='.$faq->getId()) ?>" class="btn btn-primary">Редактировать</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('faq/index') ?>" class="btn">Вернуться к списку</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Вопрос:</th>
      <td><?php echo $faq->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Ответ:</th>
      <td><?php echo $faq->getAnswer() ?></td>
    </tr>
  </tbody>
</table>
