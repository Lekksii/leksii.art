<?php include_once('vendor/autoload.php'); ?>

<!DOCTYPE html>
<html lang="uk"   >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="twitter:image:src" content="/assets/images/index-meta.webp">
  <meta property="og:image" content="/assets/images/index-meta.webp">
  <meta name="twitter:title" content="Leksii">
  <meta name="keywords" content="фотограф, фотограф киев, киев фотограф, алексей фотограф, портфолио, фото портфолио, видеограф, видеограф киев">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Фотохудожник, контент-мейкер, DOP, mood відео та музичні кліпи.">
  
  <title>Leksii</title>
  
    <!-- Шапка индексной страницы сайта -->
    
    <?php include_once('templates/meta-head.php'); ?>

</head>
<body>
<?php include_once('code/late_load.php'); ?>
<script src="code/vue.min.js"></script>

  <!--Аякс отправка post запроса при загрузке страницы-->
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

<div id="app">
<div class="container">
<!-- Антикопирка -->
<?php #require_once('templates/anticopy.php'); ?>

<!-- Меню индексной страницы сайта -->
<?php include_once('templates/index/navbar.php'); ?>

<!-- Большой слайдер индексной страницы -->
<?php include_once('templates/index/big-photo.php'); ?>

<!-- Шаблон с информацией о фотографе -->
<?php include_once('templates/index/about.php'); ?>

<!-- Шаблон с информацией о ценах -->
<?php include_once('templates/index/prices.php'); ?>

<!-- Галерея -->
<?php require_once('templates/index/gallery.php'); ?>

<!-- Видео-галерея -->
<?php include_once('templates/index/video-portfolio.php'); ?>

<div v-if="langSpinner" class="spinner-container">
  <div class="spinner">
    <div class="spinner-border txt-col-white" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
</div>

</div>

<!-- Футер -->
<?php include_once('templates/footer.php'); ?>
</div>

<!-- Кнопка быстрого скролла вверх -->
<?php include_once('templates/scroll_top.php'); ?>

<!-- Bootstrap & Scripts -->

<?php include_once('code/bootstrap-connect.php'); ?>
<script src="code/multilang.js"></script>
<script src="code/toggle_tooltip.js"></script>
<script src="code/mobile_menu.js"></script>
</body>
</html>
