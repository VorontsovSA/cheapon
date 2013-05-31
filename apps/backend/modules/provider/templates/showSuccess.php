<h1 class="page-header">
  Просмотр информации о поставщике
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('provider/edit?id='.$provider->getId()) ?>" class="btn btn-primary">Редактировать</a>
  </div>
  <div class="btn-group">
    <a href="<?php echo url_for('provider/index') ?>" class="btn">Вернуться к списку</a>
  </div>
</div>

<table class="table table-condensed table-bordered">
  <tbody>
    <tr>
      <th scope="row" class="span3">Название:</th>
      <td><?php echo $provider->getName() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Краткое описание:</th>
      <td><?php echo $provider->getShortDescription() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Полное описание:</th>
      <td><?php echo $provider->getFullDescription() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Адрес сайта:</th>
      <td><?php echo $provider->getUrl() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">E-mail:</th>
      <td><?php echo $provider->getEMail() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Часы работы:</th>
      <td><?php echo $provider->getBusinessHours() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Адрес:</th>
      <td><?php echo $provider->getAddress() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Город:</th>
      <td><?php echo $provider->getCity() ?></td>
    </tr>
    <tr>
      <th scope="row" class="span3">Пользователь для личного кабинета:</th>
      <td>
        <?php if($provider->getUserId()): ?>
          <a href="<?php echo url_for('provider/userEdit?uid='.$provider->getUserId().'&id='.$provider->getId()) ?>" class="btn btn-primary">Редактировать пользователя</a>
        <?php else: ?>
          <a href="<?php echo url_for('provider/userNew?id='.$provider->getId()) ?>" class="btn btn-primary">Создать пользователя</a>
        <?php endif ?>
      </td>
    </tr>
  </tbody>
</table>
