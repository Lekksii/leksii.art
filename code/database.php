<?php
include('telegram.php');

## дефол pdi conenct
$servername = "host";
$database = "database";
$username = "username";
$password = "pass";
 $charsetSQL = 'utf8';

 $dsn = "mysql:host=$servername;dbname=$database;charset=$charsetSQL";
 $opt = array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
 );
 
 try {
 
   $dbh = new PDO ($dsn, $username, $password, $opt);
  
 } 
 
 catch (PDOException $dbh) {
   
   echo 'Error connect to database!';
   exit ();
	
 }
 
 $languageDB = $dbh -> query ("SET character_set_client = utf8");
 $languageDB = $dbh -> query ("SET NAMES 'utf8'");
 


# Получение данных из таблицы
function db_read_data($queryCommand){
    # Пытаемся соединиться с бд
    $servername = "localhost";
    $database = "leksii-art-bd";
    $username = "alexku01";
    $password = "stalker12";
    
    $n = PHP_EOL;
    
    try{
    #tg("🐬 <b>MySQL</b>".$n.$n."Читаем БД");
    $conn_read = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    #tg("🐬 <b>MySQL</b>".$n.$n."Ставим атрибуты БД");
    $conn_read->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #tg("🐬 <b>MySQL</b>".$n.$n."Готовим query команду для выполнения");
    $stmt_read = $conn_read->prepare($queryCommand);
    #tg("🐬 <b>MySQL</b>".$n.$n."Выполняем команду query");
    $stmt_read->execute();
    #tg("🐬 <b>MySQL</b>".$n.$n."Находим значения");
    $result = $stmt_read->fetchAll();
    #tg("🐬 <b>MySQL</b>".$n.$n."$result");
    return $result;
    }catch(PDOException $e) {
    tg("🐬 <b>MySQL</b>".$n.$n."Ошибка чтения БД [db_read_data]: ".$e->getMessage());
    echo "MySQL Error: " . $e->getMessage();
}
$conn_read = null;
}

# Обновляем значения

function db_update_data($update){
    # Пытаемся соединиться с бд
    $servername = "localhost";
    $database = "leksii-art-bd";
    $username = "alexku01";
    $password = "stalker12";
    
    $n = PHP_EOL;
    
    try{
    $conn_upd = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn_upd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $update;
    $stmt_upd = $conn_upd->prepare($sql);
    $stmt_upd->execute();
    }catch(PDOException $e) {
    tg("🐬 <b>MySQL</b>".$n.$n."Ошибка обновления БД [db_update_data]: ".$e->getMessage());
    echo "MySQL Error: " . $e->getMessage();
}
$conn_upd = null;
}
?>