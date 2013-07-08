<h1 class="page-header">
  Список вопросов
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('faq/new') ?>" class="btn btn-primary">Создать</a>
  </div>
</div>

<table class="table table-condensed table-bordered table-hover">
  <thead>
    <tr>
      <th>Вопрос</th>
      <th>Сортировка</th>
    </tr>
  </thead>
  <tbody><?php foreach ($faqs as $faq): ?>
    <tr>
      <td><a href="<?php echo url_for('faq/show?id='.$faq->getId()) ?>"><?php echo truncate_text($faq->getName(), 800) ?></a></td>
      <td>
        <?php if($faq['sort'] != 1): echo link_to('<i class="icon-arrow-up"></i></a>', 'faq/up?id='.$faq->getId(), array(
          'method' => 'post',
        )); endif ?>
        <?php if($faq['sort'] != $maxsort): echo link_to('<i class="icon-arrow-down"></i></a>', 'faq/down?id='.$faq->getId(), array(
          'method' => 'post',
        )); endif ?>
      </td>
    </tr>
  <?php endforeach; ?></tbody>
</table>
