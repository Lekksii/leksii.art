<?php


if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $userdata = db_read_data("SELECT * FROM studio_admin WHERE id = ".intval($_COOKIE['id']));
    
    if($userdata['user_hash'] != $_COOKIE['hash'] or $userdata['id'] != $_COOKIE['id']){
        
        setcookie('id', '', -1, '/');
        setcookie('hash', '', -1, '/');
        
    }
}
?>