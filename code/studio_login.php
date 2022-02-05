<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

## Фильтруем либо пизда
$login = $_POST['login_code'];

## Проверяем отправлена ли форма
if (isset($login))
{
    ## Либо нужно немного переписатьф укнцию либо сделать другую так ака данная фнукциия не возрващает данные в массиве 
    #типо $data['value']
    #$data = db_read_data("SELECT * FROM studio_admin WHERE login_code = '".$login."'");
    
    #tg($data['name']);
    
    $checkUser = $dbh -> query ("SELECT * FROM `studio_admin` WHERE `login_code` = ".$login." LIMIT 1") -> RowCount ();

    //var_dump($checkUser);
    //exit;
    #if ($login == $data['login_code'])
    if ($checkUser > 0) 
    {
        ## Вывод данные юзера по логину

        $hash = md5(generateCode(10));
        
        ## Обновляем хеш
        $data = $dbh -> query ("SELECT * FROM `studio_admin` WHERE `login_code` = ".$dbh -> quote ($login)." LIMIT 1") -> fetch ();

        db_update_data("UPDATE studio_admin SET user_hash = '".$hash."' WHERE id = ".$data['id']);
        
        $getUser = $dbh -> query ("SELECT * FROM `studio_admin` WHERE `user_hash` = ".$dbh -> quote ($hash)." LIMIT 1") -> fetch ();
        
        //var_dump($data['id']);
        //exit;

        #setcookie('id', $data['id'], time()+86400*24, '/', 'leksii.art', true, true, ['samesite' => 'None']);
        #setcookie('hash', $hash, time()+86400*24, '/', 'leksii.art', true, true, ['samesite' => 'None']);

        $add_cookie = array (
                'expires' => time() + 86400*24,
                'path' => '/',
                'domain' => '.leksii.art', 
                'secure' => true,     
                'httponly' => true,   
                'samesite' => 'None'
                );
            

        setcookie('id', $data['id'], $add_cookie);    
        setcookie('hash', $hash, $add_cookie);    
        header('Location: /studio?u=' . $data['user_hash'] );

    }
    else 
    {
        ## Если данные не совпадают редирект на страницу ошибки и отправка message в telegram
        #message_to_telegram('Внимание, кто-то пытался войти в панель студии, но ввёл неверный пароль❗️'.$n.$n.'Код: '.$_POST['login_code'].$n.
        #'IP: '.getUserIP().$n.$n.'Было это '.date('d/m/Y').', примерно в '.date('H:i').' 🌚');
        header('Location: /photostudio?error=true');
    }
}
## Тут если пустое либо я хз крч нахуй шлем
#} 
#else 
#{
    #header('Location: /photostudio?empty_field=true');

#}

## Разлогин
if (isset($_GET['logout']))
{
    setcookie('id', '', -1, '/');
    setcookie('hash', '', -1, '/');
    header('Location: /photostudio'); 
}
