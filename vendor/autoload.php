<?php 

#ini_set('session.cookie_secure', "1"); ini_set('session.cookie_httponly', "1"); ini_set('session.cookie_samesite','None'); session_start();
header("Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure");

define('ROOT', $_SERVER['DOCUMENT_ROOT']);



require_once ROOT . '/code/database.php';
require_once ROOT . '/vendor/check_auth.php';
require_once ROOT . '/code/libs/gallery_editor.php';


function isAuth () {
    global $user;
    if (!$user)
    {
        header('Location: /404');
    }
}