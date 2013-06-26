<h1 class="superheader text-center">
  <?php echo $page->getName() ?>
</h1>

<div class="mega-border page">
  <div class="row">
    <div class="span8">
      <?php echo $sf_data->getRaw('page')->getContent() ?>
    </div>
    <div class="span8 pull-right">
      <h2>Обратная связь</h2>
      <?php include_partial('form', array('form' => $form)) ?>
    </div>
  </div>
</div>

