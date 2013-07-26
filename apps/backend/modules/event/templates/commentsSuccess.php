<h1 class="page-header">
  <?php echo $event['name']?>
  <small>Список комментариев</small>
</h1>

<div class="btn-toolbar">
  <div class="btn-group">
    <a href="<?php echo url_for('event/index') ?>" class="btn">Вернуться к списку акций</a>
  </div>
</div>

<ul class="media-list">
  <?php foreach($sf_data->getRaw('event')['Comments'] as $comment): ?>
    <li class="media <?php if(!count($comment['Users']) > 0): echo 'well'; $comment->markReaded(); endif;?>">
      
      <a class="pull-left" href="#">
        <img class="media-object" src="http://lorempixel.com/64/64/?1">
      </a>
      <div class="media-body">
        <div class="btn-group pull-right">
          <?php if($comment['is_active']): ?>
          <a class="btn btn-info" href="<?php echo url_for('event/hidecomment?id='.$comment['id']) ?>"><i class="icon-volume-off icon-white"></i> Скрыть</a>
          <?php else: ?>
          <a class="btn btn-success" href="<?php echo url_for('event/publishcomment?id='.$comment['id']) ?>"><i class="icon-volume-up icon-white"></i> Опубликовать</a>
          <?php endif; ?>
          <?php echo link_to('<i class="icon-remove"></i>', 'event/removecomment?id='.$comment['id'], array(
            'method' => 'delete',
            'confirm' => 'Вы уверены?',
            'class' => 'btn btn-warning pull-right',
          )) ?>
        </div>

        <h4 class="media-heading muted"><?php echo $comment['Creator']['first_name'].' '.$comment['Creator']['last_name'] ?>, <?php echo date('Y-m-d H:i', strtotime($comment['created_at'])) ?></h4>
        <p><?php echo $comment['name'] ?></p>

        <?php if($comment['answer']): ?>
        <div class="media well">
          <a class="pull-left" href="#">
            <img class="media-object" src="http://lorempixel.com/64/64/?2">
          </a>
          <div class="media-body">
            <div class="btn-group pull-right">
              <!--a class="btn" href="<?php echo url_for('event/editcommentanswer?id='.$comment['id']) ?>"><i class="icon-pencil"></i></a-->
              <?php echo link_to('<i class="icon-remove"></i>', 'event/removecommentanswer?id='.$comment['id'], array(
                'method' => 'delete',
                'confirm' => 'Вы уверены?',
                'class' => 'btn btn-warning pull-right',
              )) ?>
            </div>
            <h4 class="media-heading muted"><?php echo $comment['Moderator']['first_name'].' '.$comment['Moderator']['last_name'] ?>, <?php echo date('Y-m-d H:i', strtotime($comment['answered_at'])) ?></h4>
            <p><?php echo $comment['answer'] ?></p>
          </div>
        </div>
        <?php else: ?>
        <div class="media well">
          <?php $form = new CommentForm($comment); ?>
          <form class="form-horizontal no-margin" action="<?php echo url_for('event/setcommentanswer?id='.$comment['id']) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
            <div>
            <?php echo $form['answer']->render(array('class' => 'input-block-level')) ?>
            <?php echo $form->renderHiddenFields() ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
        </div>
        <?php endif ?>
      </div>
    </li>
  <?php endforeach ?>
</ul>
