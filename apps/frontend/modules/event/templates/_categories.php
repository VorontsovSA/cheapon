<ul class="nav nav-pills" style="display:inline-block">
  <li <?php if ($sf_request->getParameter('category') == 'all'): echo 'class="active"'; endif ?>>
    <a href="<?php echo url_for('@homepage?category=all') ?>">Все</a>
  </li>
  <?php if ($categories and count($categories)): foreach ($categories as $category): ?>
    <li <?php if ($sf_request->getParameter('category') == $category->getSlug()): echo 'class="active"'; endif ?>>
      <a href="<?php echo url_for('@homepage?category=' . $category->getSlug()) ?>"><?php echo $category ?></a>
    </li>
  <?php endforeach; endif ?>
</ul>
