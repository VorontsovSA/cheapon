<ul class="nav nav-pills" style="display:inline-block">
  <li <?php if ($sf_request->getParameter('category') == 'all'): echo 'class="active"'; endif ?>>
    <a href="<?php echo url_for('@homepage?category=all&past=' . $sf_request->getParameter('past')) ?>">Все</a>
  </li>
  <?php if ($categories and count($categories)): foreach ($categories as $category): ?>
    <li <?php if ($sf_request->getParameter('category') == $category->getSlug()): echo 'class="active"'; endif ?>>
      <a href="<?php echo url_for('@homepage?category=' . $category->getSlug() . '&past=' . $sf_request->getParameter('past')) ?>"><?php echo $category ?></a>
    </li>
  <?php endforeach; endif ?>
</ul>
