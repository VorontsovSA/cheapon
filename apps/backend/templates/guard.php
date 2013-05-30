<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
   
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="/">Cheapon</a>
          </div>
        </div>
      </div>
      <div class="container navbar-inner">
        <?php echo $sf_content ?>
      </div>
    
  </body>
</html>
