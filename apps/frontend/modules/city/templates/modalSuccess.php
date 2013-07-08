<?php if ($cities and count($cities)): ?>
  <ul><?php foreach ($cities as $city): ?>
    <li><a href="<?php echo url_for('city/choose?slug=' . $city->getSlug()) ?>"><?php echo $city ?></a></li>
  <?php endforeach ?></ul>
<?php endif ?>
