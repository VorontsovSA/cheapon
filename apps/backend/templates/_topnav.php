<?php
  $navList = array(
    'Акции' => array(
      'credentials' => $sf_user->hasCredential('can_view_events'),
      'isActive' => $sf_context->getModuleName() == 'event',
      'href' => url_for('event/index'),
    ),
    'Поставщики' => array(
      'credentials' => $sf_user->hasCredential('can_view_providers'),
      'isActive' => $sf_context->getModuleName() == 'provider',
      'href' => url_for('provider/index'),
    ),
    'Телефоны поставщиков' => array(
      'credentials' => $sf_user->hasCredential('can_view_phones'),
      'isActive' => $sf_context->getModuleName() == 'phone',
      'href' => url_for('phone/index'),
    ),
    'Клиенты' => array(
      'credentials' => $sf_user->hasCredential('can_view_clients'),
      'isActive' => $sf_context->getModuleName() == 'client',
      'href' => url_for('client/index'),
    ),
    'Вопросы и ответы' => array(
      'credentials' => $sf_user->hasCredential('can_view_faq'),
      'isActive' => $sf_context->getModuleName() == 'faq',
      'href' => url_for('faq/index'),
    ),
    'Города' => array(
      'credentials' => $sf_user->hasCredential('can_view_cities'),
      'isActive' => $sf_context->getModuleName() == 'city',
      'href' => url_for('city/index'),
    ),
    'Страницы' => array(
      'credentials' => $sf_user->hasCredential('can_view_pages'),
      'isActive' => $sf_context->getModuleName() == 'page',
      'href' => url_for('page/index'),
    ),
    'Категории акций' => array(
      'credentials' => $sf_user->hasCredential('can_view_categories'),
      'isActive' => $sf_context->getModuleName() == 'category',
      'href' => url_for('category/index'),
    ),
    'Галереи' => array(
      'credentials' => $sf_user->hasCredential('can_view_galeries'),
      'isActive' => $sf_context->getModuleName() == 'gallery',
      'href' => url_for('gallery/index'),
    ),
    'Картинки галерей' => array(
      'credentials' => $sf_user->hasCredential('can_view_images'),
      'isActive' => $sf_context->getModuleName() == 'image',
      'href' => url_for('image/index'),
    ),
  );
?>
<ul class="nav">
  <?php foreach ($navList as $itemName => $item): if ($item['credentials']): ?>
    <li class="<?php echo $item['isActive'] ? ' active' : '' ?>"><a href="<?php echo $item['href'] ?>"><?php echo $itemName ?></a></li>
    <?php endif ?>
  <?php endforeach ?>
</ul>
