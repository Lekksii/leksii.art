<?php
require_once('telegram.php');
require_once('libs/Mobile_Detect.php');

# Отступ на новую строку (Впадлу каждый раз было писать полное название)
$n = PHP_EOL;


$ip_blacklist = array("193.194.112.129","77.87.40.182");
$device = "?";
$details = "";

$uas = array( 
    'Mozilla/5.0 (Windows NT 6.1 WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2'
    ,'Mozilla/5.0 (iPad CPU OS 10_1_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.79 Mobile/14B100 Safari/602.1'
    ,'Mozilla/5.0 (iPhone CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) FxiOS/1.0 Mobile/12F69 Safari/600.1.4'
    ,'Mozilla/5.0 (iPhone CPU iPhone OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mercury/7.2 Mobile/9B206 Safari/7534.48.3'
    ,'Mozilla/5.0 (iPhone U CPU iPhone OS 7_0_4 like Mac OS X en-US) AppleWebKit/534.35 (KHTML, like Gecko) Chrome/11.0.696.65 Safari/534.35 Puffin/3.11505IP Mobile'
    ,'Mozilla/5.0 (iPad CPU OS 7_0_6 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Coast/2.0.5.71150 Mobile/11B651 Safari/7534.48.3'
    ,'Mozilla/5.0 (Macintosh Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36'
    ,'Mozilla/5.0 (iPad CPU OS 7_1 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) YaBrowser/14.2.1700.0 Mobile/11D167 Safari/9537.53'
    ,'Mozilla/5.0 (iPad CPU OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/6.0 MQQBrowser/4.1.1 Mobile/11A501 Safari/7534.48.3'
    ,'Mozilla/5.0 (iPad U CPU OS 7_1 like Mac OS X ru iPad3,6) AppleWebKit/534.46 (KHTML, like Gecko) UCBrowser/2.4.0.367 U3/1 Safari/7543.48.3'
);

$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

$detect = new Mobile_Detect;

function ip_details($ip) {
  $json = file_get_contents("http://ipwhois.app/json/{$ip}");
  $details = json_decode($json, true);
  return $details;
}
if (array_key_exists(getUserIP(),$ip_blacklist)){
$details = ip_details(getUserIP());
}





# Текущее время
$currentDate = date('d/m/Y');
$currentTime = date('H:i');

# Посылаем сообщение через бота при загрузке индексной страницы
if($_POST['action'] == 'index_loaded') {

    if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "en"){
    header('Location: https://leksii.art/en'); exit();
    }
    if (!isBot()){
        if (getUserIP() != $ip_blacklist){
    tg('👤 На главную страницу бы произведён переход.'.$n.$n.
    '⌨️ <b>Устройство</b>: '.$device.$n.
    '📡 <b>IP</b>: '.getUserIP().$n.
    '🗺 <b>Детали</b>: '.$details['country'].'('.$details['country_code'].'), '.$details['region'].', '.$details['city'].$n.
    'ISP: '.$details['isp'].$n.$n.
    '🌍 <b>Браузер</b>: '.$_SERVER['HTTP_USER_AGENT'].$n.
    '🌍 <b>Язык</b>: '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].$n.$n.
    '🗓 <b>Дата входа</b>: '.$currentDate.$n.
    '🕘 <b>Время входа</b>: '.$currentTime);
        }
        }else{
        tg('🤖 Заходил поисковый бот.');
    }
}

# Посылаем сообщение через бота при загрузке 404 страницы
if($_POST['action'] == '404_loaded') {
    if (!isBot()){
        if (getUserIP() != $ip_blacklist){
    tg('⛔️ Был произведён переход по несуществующему URL, что привело к попаданию на страницу 404.');
        }
    }else{
        tg('🤖 Заходил поисковый бот.');
    }
}

# Посылаем сообщение через бота при загрузке тех. страницы
if($_POST['action'] == 'tech_loaded') {
    if (!isBot()){
        if (getUserIP() != $ip_blacklist){
    tg('🛠 Была попытка входа на главную страницу в то время, как сайт находится на тех. обслуживании.');
    
        }        
        }else{
        tg('🤖 Заходил поисковый бот.');
    }
        
    }
    
# Посылаем сообщение через бота при закрытии страницы\вкладки\браузера
if($_POST['action'] == 'on_page_close') {
    if (!isBot()){
        #if (getUserIP() != $ip_blacklist){
    #tg('ℹ️ Посетитель покинул сайт.');
        #}
    }else{
        tg('🤖 Поисковый бот покинул сайт.');
    }
}
?>