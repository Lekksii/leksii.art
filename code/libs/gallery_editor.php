<?php

# Взятие случайной фотографии из случайной папки с альбомами из БД
function get_random_photo(){
    $path = ROOT."/assets/images/photos/";
    $json = file_get_contents(ROOT.'/json/data.json');
    $json_data = json_decode($json, true);
    $albums = $json_data["albums_section"];
    $albums_count = count($albums)-1;

    $rand = random_int(0,$albums_count);

    $gdir = $path.$albums[$rand]['folder'];
    
    $files = array_diff(scandir($gdir), array('.', '..'));
    $fdata = $files;
    
    $replaced = str_replace("/var/www/alexku01/data/www/leksii.art","",$gdir.'/'.$fdata[array_rand($fdata)]);

    return $replaced;
}

# Генерируем галерею альбомов из JSON
function generate_json_albums(){
    $json = file_get_contents(ROOT.'/json/data.json');
    $json_data = json_decode($json, true);
    $albums = $json_data["albums_section"];
    $album_count = count($albums)-1;
    $tmp = 0;

    for ($i=$album_count;$i>0;$i--){
        if ($albums[$i]['show_album'] == true)
        {
        if($tmp === 0){
            echo '<div class="row row-album">';
        }
        
        if ($tmp < 4){
            echo '
            <div class="col-4 col-album col-mb" onclick="location.href=\''.'/gallery?album='.$i.'\'">
                <img class = "album" loading="lazy" data-src="/assets/images/photos/'.$albums[$i]['folder'].'/'.$albums[$i]['preview'].'.webp" alt="'.$albums[$i]['title'].'">
                <i class="bi bi-images album-icon"></i>
                <div class="album-title">
                    <p>'.$albums[$i]['title'].'</p>
                </div>
            </div>
            ';
            $tmp += 1;
        }
        
        if($tmp === 4 and $i != 0){
            echo '</div>
            ';
            $tmp = 0;
        }
        
        if($i === 0){
            echo '</div>
            ';
        }
        }
    }
}
 
# Генерируем галерею видео-портфолио
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
            if(!array_key_exists("local",$vids[$i])){
                $preview_path = "";

                if (array_key_exists("preview",$vids[$i])){
                    $preview_path = "https://leksii.art/assets/videos/".$vids[$i]["preview"];
                }else{
                    $preview_path = "https://img.youtube.com/vi/".$vids[$i]['url']."/0.jpg";
                }
                echo '
                <div class="col col-sm-6 col-mb vid-pop yt-vid col-mb-vid" onclick="window.open(\'https://youtube.com/embed/'.$vids[$i]['url'].'?rel=0\',\'_blank\')">
                    <div class="title-vid">
                        <p class="f-ua fw700">'.$vids[$i]['title'].'</p>
                    </div>
                    <img class="youtube-preview" height="250" src="/asstes/images/placeholder.webp" data-src="'.$preview_path.'" loading="lazy" alt="'.$vids[$i]['title'].'">
                </div>
                ';
            }elseif(array_key_exists("local",$vids[$i]) && $vids[$i]["local"] == true && $vids[$i]["source"] != null){
            echo '
            <div class="col col-sm-6 col-mb vid-pop col-mb-vid">
                <div class="title-vid">
                    <p class="f-ua fw700">'.$vids[$i]['title'].'</p>
                </div>
                <video height="250" width="456" controls="controls" poster="'."https://leksii.art/assets/videos/".$vids[$i]["folder"]."/".$vids[$i]["preview"].'" style="object-fit: cover;">';
                for ($local_files = 0; $local_files < count($vids[$i]['source']); $local_files++){
                    if(str_contains($vids[$i]['source'][$local_files],"mp4")){
                        echo '<source src="'."https://leksii.art/assets/videos/".$vids[$i]["folder"]."/".$vids[$i]['source'][$local_files].'" type="video/mp4">';
                    }elseif(str_contains($vids[$i]['source'][$local_files],"webm")){
                        echo '<source src="'."https://leksii.art/assets/videos/".$vids[$i]["folder"]."/".$vids[$i]['source'][$local_files].'" type="video/webm">';
                    }
                    
                }
            echo '</video>
            </div>
            ';
            }
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