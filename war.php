<!DOCTYPE html>
<html lang="uk"   >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="https://leksii.art/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="I can't take photos cause Russia invade in my country!">
  
  
  <title>WAR</title>
    <!-- Шапка индексной страницы сайта -->
    <?php require_once('templates/meta-head.php'); ?>
</head>
<body>
<script src="code/vue.min.js"></script>
<!-- Analytics -->
<?php require_once('templates/google_anal.php'); ?>

<div id="app">
    <div class="container">
    
        <?php require_once('templates/error/navbar-error.php'); ?>

        <?php require_once('templates/error/error_war.php'); ?>
        
        <?php require_once('templates/footer.php'); ?>
    </div>

    <div v-show="langSpinner" class="spinner-container" style="transition: 0.3s ease; display: none;">
  <div class="spinner">
    <div class="spinner-border txt-col-white" role="status">
      <span class="sr-only transparent">Loading...</span>
    </div>
  </div>
</div>
</div>
<script src="code/multilang.js"></script>
<script>
    // Проверка, загружена ли страница                                      
    $(document).ready( function() { 
      
        $.ajax({
                type: "POST",
                url: 'code/on_load.php',
                data:{action:'index_loaded'}
            }); 
            [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) { img.setAttribute('src', img.getAttribute('data-src')); img.onload = function() { img.removeAttribute('data-src'); }; });
    }); 
</script> 

<!-- Bootstrap -->
<?php require_once('code/bootstrap-connect.php'); ?>
</body>
</html>