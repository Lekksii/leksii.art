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
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Страница разработки и тестов">
  
  <title>Тестинг говнокода</title>
  
  <!-- Шапка индексной страницы сайта -->
  <?php include('templates/meta-head.php'); ?>

</head>
<body>
<script src="code/vue.min.js"></script>

<div class="container" id="app">
<!-- Аналитика от гугла -->
<?php #include('templates/google_anal.php'); ?>
<!-- Антикопирка -->
<?php #include('templates/anticopy.php'); ?>

<h3 v-text="langKey('menu_about')" class="txt-col-white text-center"></h3>
<span v-text="langKey('menu_price')" class="txt-col-white text-center"></span>

<div style="margin-top: 2rem;">
<button class="txt-col-white text-center" @click="setLang('en')" style="background-color: #000;">EN 🇬🇧</button>
<button class="txt-col-white text-center" @click="setLang('ru')" style="background-color: #000;">RU 🇷🇺</button>
<button class="txt-col-white text-center" @click="setLang('ua')" style="background-color: #000;">UA 🇺🇦</button>
</div>

<div v-show="langSpinner" class="spinner-container" style="transition: 0.3s ease;">
  <div class="spinner">
    <div class="spinner-border txt-col-white" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
</div>




<!-- Меню индексной страницы сайта -->
<?php #include('templates/remake/navbar.php'); ?>

<?php #include('templates/error/navbar-error.php'); ?>

<!-- Модальное алерт окно -->
<?php #include('templates/alerts/hacker.php'); ?>

<!-- Большой слайдер индексной страницы -->
<?php #include('templates/index/big-photo.php'); ?>

<!-- Шаблон с информацией о фотографе -->
<?php #include('templates/remake/about.php'); ?>

<!-- Шаблон с информацией о ценах -->
<?php include('templates/remake/prices.php'); ?>

<?php #include('templates/remake/video-portfolio.php'); ?>

<!-- Галерея -->
<?php #include('templates/index/gallery.php'); ?>

<!-- Видео-галерея -->
<?php #include('templates/index/ph_videos.php'); ?>
</div>
<!-- Футер -->
<?php #include('templates/footer.php'); ?>
  
<!-- Кнопка быстрого скролла вверх -->
<?php #include('templates/scroll_top.php'); ?>
<script src="code/multilang.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>