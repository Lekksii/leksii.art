<?php
require_once('telegram.php');
require_once('libs/Mobile_Detect.php');

# Отступ на новую строку (Впадлу каждый раз было писать полное название)
$n = PHP_EOL;


$ip_blacklist = "77.87.40.164";
$device = "?";
$details = "";

$detect = new Mobile_Detect;

function ip_details($ip) {
  $json = file_get_contents("http://ipwhois.app/json/{$ip}");
  $details = json_decode($json, true);
  return $details;
}
if (getUserIP() != $ip_blacklist){
$details = ip_details(getUserIP());
}
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 $device = "Телефон 📱";
}else{
    $device = "ПК 💻";
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