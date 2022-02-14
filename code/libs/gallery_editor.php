<?php

# Взятие случайной фотографии из случайной папки с альбомами из БД
function get_random_photo(){
    $path = ROOT."/assets/images/photos/";
    $db_album = db_read_data("SELECT * FROM albums WHERE show_album LIKE 1 ORDER BY id DESC LIMIT 3");
    $rand = random_int(0,count($db_album)-1);

    $gdir = $path.$db_album[$rand]['folder'];
    
    $files = array_diff(scandir($gdir), array('.', '..'));
    $fdata = $files;
    
    $replaced = str_replace("/var/www/alexku01/data/www/leksii.art","",$gdir.'/'.$fdata[array_rand($fdata)]);

    return $replaced;
}
 
# Генерируем галерею альбомов из БД
function generate_albums(){
    # Макс. кол-во колонок в ряде альбомов
    $db_album = db_read_data("SELECT * FROM albums ORDER BY id DESC");
    $album_count = count($db_album);
    $tmp = 0;

    for ($i=0;$i<$album_count;$i++){
        if ($db_album[$i]['show_album'] == 1)
        {
        if($tmp === 0){
            echo '<div class="row row-album">';
        }
        
        if ($tmp < 4){
            echo '
            <div class="col-4 col-album col-mb" onclick="location.href=\''.'/gallery?album='.$db_album[$i]['id'].'\'">
                <img class = "album" loading="lazy" data-src="/assets/images/photos/'.$db_album[$i]['folder'].'/'.$db_album[$i]['preview_photo'].'.webp" alt="'.$db_album[$i]['title'].'">
                <i class="bi bi-images album-icon"></i>
                <div class="album-title">
                    <p>'.$db_album[$i]['title'].'</p>
                </div>
            </div>
            ';
            $tmp += 1;
        }
        
        if($tmp === 4 and $i != $album_count-1){
            echo '</div>
            ';
            $tmp = 0;
        }
        
        if($i === $album_count-1){
            echo '</div>
            ';
        }
        }
    }

}

function video_portfolio(){
    $json = file_get_contents(ROOT.'/json/data.json');
    $json_data = json_decode($json, true);
    $tmp = 0;
    $vids = $json_data["video_section"];
    $vid_count = count($vids);

    for($i=0;$i<$vid_count;$i++){
        if($tmp === 0){
            echo '<div class="row row-mobile">';
        }

        if ($tmp < 2){
            echo '
            <div class="col col-sm-6 col-mb vid-pop col-mb-vid" onclick="location.href=https://youtube.com/embed/'.$vids[$i]['url'].'?rel=0">
                <div class="title-vid">
                    <p class="f-ua fw700">'.$vids[$i]['title'].'</p>
                </div>
                <img class="youtube-preview" height="250" data-src="https://img.youtube.com/vi/'.$vids[$i]['url'].'/0.jpg" loading="lazy" alt="'.$vids[$i]['title'].'">
            </div>
            ';
            $tmp += 1;
        }

        if($tmp === 2 and $i != $vid_count-1){
            echo '</div>
            ';
            $tmp = 0;
        }
        
        if($i === $vid_count-1){
            echo '</div>
            ';
        }
    }
}

?>