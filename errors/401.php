<?php include_once("../.config"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>401 Authorisation Required - <?php echo SITE_NAME; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <style>
      body { padding: 20px 0; }
      .brand { font-weight: bold;}
    </style>
  </head>
  <body>
    <div class="container">
      <p class="brand"><?php echo SITE_NAME; ?></p>
      <div class="jumbotron">
        <h1>Sorry, you don't have permission to access this</h1>
        <p>Please check you've entered the correct web address.</p>
        <?php echo PAGE_LINE2; ?>
      </div>
    </div>

  </body>
</html>
