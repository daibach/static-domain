<?php include_once(".config"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo SITE_TITLE; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <style>
      body { padding: 20px 0; }
      .brand { font-weight: bold;}
    </style>
  </head>
  <body>
    <div class="container">
      <p class="brand"><?php echo SITE_NAME; ?></p>
      <div class="jumbotron">
        <h1><?php echo PAGE_HEADING; ?></h1>
        <?php echo PAGE_LINE1; ?>
        <?php echo PAGE_LINE2; ?>
      </div>
    </div>

  </body>
</html>
