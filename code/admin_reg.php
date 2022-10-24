<?php
include('telegram.php');


$servername = "109.94.209.16";
$database = "leksii-art-bd";
$username = "alexku01";
$password = "stalker12";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
tg("🐬 <b>MySQL</b>".$n.$n."Connection failed: ".$conn->connect_error);
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['code']) & isset($_POST['name']))
{
    $err = [];
    
if(!preg_match("/^[0-9]+$/",$_POST['code']))
    {
        $err[] = "Логин может состоять только из цифр";
    }
    
if(strlen($_POST['code']) < 4)
    {
        $err[] = "Логин должен быть из 4 цифр";
    }

$query = mysqli_query($conn, "SELECT id FROM studio_admin WHERE login_code='".mysqli_real_escape_string($conn, $_POST['code'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким кодом уже существует!";
    }

if(count($err) == 0)
    {

        $login = $_POST['code'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $name = $_POST['name'];
        #$get_count = mysqli_query($conn, "SELECT COUNT (id) FROM studio_admin;");
        
        #tg("🐬 <b>MySQL</b>".$n.$n."studio_admin кол-во столбцов: ".strval($get_count));
        mysqli_query($conn,"INSERT INTO studio_admin SET login_code='".$login."', name='".$name."'");
        header("Location: https://".$_SERVER['SERVER_NAME']."/photostudio"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>