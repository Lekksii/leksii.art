<?php include_once('vendor/autoload.php'); ?>
<!DOCTYPE html>
<html lang="uk"   >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="https://leksii.art/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Альбом">
  
  <title>Фотоколекція</title>
    <!-- Шапка индексной страницы сайта -->
    <?php require_once('templates/meta-head.php'); ?>
    <script src="code/vue.min.js"></script>
</head>
<body>

<div class="container">
<!-- Analytics -->
<?php require_once('templates/google_anal.php'); ?>

<div id="app">
<?php require_once('templates/error/navbar-error.php'); ?>
  
<?php 

if (isset($_GET['album'])){
    $db_album = db_read_data("SELECT * FROM albums ORDER BY id ASC");
    $album_id = $_GET['album']-1;
    $path = "assets/images/photos/".$db_album[$album_id]['folder'];
    $files = [];
    $album_count = 0;
    $tmp = 0;

    foreach (glob($path.'/*.jpg') as $file) {
        $files[] = $file;
    }

    $album_count = count($files);

    echo '<div class="container-md ">
            <div class="vid-title-block f-ua">
                <h4 class="fw700 fs20 txt-col-white mb-1"></h4>
            </div>
            <h4 class="fw700 fs16 txt-col-white mb-2"><strong>{{langKey("gallery_title")}} "'.$db_album[$album_id]['title'].'"</strong></h4>';
    for ($i=0;$i<$album_count;$i++){
        if($tmp == 0){
            echo '<div class="row">';
        }
        
        if ($tmp < 4){
            echo '
            <div class="col-4 col-album-big col-mb">
                <img class = "album" src="'.$files[$i].'" alt="'.$db_album[$album_id]['title'].'">
            </div>';
            $tmp += 1;
        }

        if($tmp == 4 and $i != $album_count-1){
            echo '</div>';
            $tmp = 0;
        }
        
        if($i == $album_count-1){
            echo '</div>';
        }
    }

    echo '</div>';
}

?>

<div class="btns-container mb-1">
    <a class="f-ua fs12 style-white-btn txt-col-black" style="color: #000;" href="/#photos">{{langKey('gallery_back')}}</a> 
</div>

<?php require_once('templates/footer.php'); ?>
</div>
<script src="code/multilang.js"></script>
<?php #include('templates/scroll_top.php'); ?>
</div>
<!-- Bootstrap -->
<?php require_once('code/bootstrap-connect.php'); ?>
</body>
</html>