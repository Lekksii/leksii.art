<?php include_once('vendor/autoload.php'); ?>

<!DOCTYPE html>
<html lang="uk"   >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="/assets/images/index-meta.jpeg">
  <meta property="og:image" content="/assets/images/index-meta.jpeg">
  <meta name="twitter:title" content="Leksii">
  <meta name="keywords" content="фотограф, фотограф киев, киев фотограф, алексей фотограф, портфолио, фото портфолио, видеограф, видеограф киев"></meta>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Фотохудожник, контент-мейкер, DOP, mood відео та музичні кліпи.">
  
  <title>Leksii</title>
  
    <!-- Шапка индексной страницы сайта -->
    <?php include_once('templates/meta-head.php'); ?>

    <!-- Аналитика от гугла -->
  <?php include_once('templates/google_anal.php'); ?>
  <script src="code/vue.min.js"></script>
</head>
<body>
  <!--Аякс отправка post запроса при загрузке страницы-->
<script type="application/javascript">
    // Проверка, загружена ли страница                                      
    $(document).ready( function() { 
        $.ajax({
                type: "POST",
                url: 'code/on_load.php',
                data:{action:'index_loaded'}
            }); 
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

<div v-show="langSpinner" class="spinner-container" style="transition: 0.3s ease; display: none;">
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
<!-- Bootstrap -->
<?php include_once('code/bootstrap-connect.php'); ?>
<script src="code/multilang.js"></script>
<script type="application/javascript">
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>
