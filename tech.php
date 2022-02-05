
<!DOCTYPE html>
<html lang="uk"   >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Технічні роботи">
  
  
  <title>Технічні роботи</title>
    <!-- Шапка индексной страницы сайта -->
  <?php require_once('templates/meta-head.php'); ?>
</head>
<body>
<div class="container">
<!-- Analytics -->
<?php require_once('templates/google_anal.php'); ?>

<!--Аякс отправка post запроса при загрузке страницы-->
<script type="text/javascript">
    // Check if the page has loaded completely                                         
    $(document).ready( function() { 
        $.ajax({
                type: "POST",
                url: '/on_load.php',
                data:{action:'tech_loaded'}
            }); 
    }); 
</script> 
  
<?php require_once('templates/error/navbar-error.php'); ?>

<?php require_once('templates/error/tech.php'); ?>
  
<?php #require_once('templates/scroll_top.php'); ?>

</div>
<?php require_once('templates/footer.php'); ?>
 <!-- Bootstrap -->
 <?php require_once('code/bootstrap-connect.php'); ?>
</body>
</html>