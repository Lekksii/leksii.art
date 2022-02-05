<?php
 if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
 
	$id = $_COOKIE['id'];
	$user_hash = $_COOKIE['hash'];
	
	$query = $dbh -> prepare ("SELECT * FROM `studio_admin` WHERE `id` =? and `user_hash` =? LIMIT 1");
    $query -> execute (array($id, $user_hash));
	$query -> RowCount();

    $user = $query -> fetch();
	
    if ($user['id'] != $id or $user['user_hash'] != $user_hash) {
    $delete__cookie = array (
                'expires' => -1,
                'path' => '/',
                'domain' => '.leksii.art', 
                'secure' => true,     
                'httponly' => true,   
                'samesite' => 'None'
                );
    setcookie('id', '',  $delete__cookie);
    setcookie('hash', '',  $delete__cookie);
    header('Location: /photostudio'); 
		 
    }
	
 }


?>