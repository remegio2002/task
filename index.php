<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/Default-Screen.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    <link rel="icon" type="image/x-icon" href="img_asset/dost_logo.png">
    <title>ISSP Online Help</title>
  </head>

  <body>

    <div class="topbar">

      <div>
        <img src="img_asset/dost_logo.png" alt="">
      </div>

      <div class="banner">
        <h1>ISSP Integrated System</h1>
      </div>
      
    </div>

    <?php
      if ($_GET['param']==('admin')){
        include_once('issp_admin/admin.php');
      }

      else if ($_GET['param']==('agency')){
        include_once('issp_agency/agency.php');
      }

      else{
        ?>
        <h1>Something went wrong!</h1>
        <?php
      }
    ?>

  </body>
</html>
