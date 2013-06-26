<h1 class="superheader text-center">
  Вопросы и ответы
</h1>

<div class="mega-border page">
  <?php foreach ($faqs as $faq): ?>
    <article class="well">
      <h3><?php echo $faq->getName() ?></h3>

      <?php echo simple_format_text($faq->getAnswer()) ?>
    </article>
  <?php endforeach ?>
</div>
