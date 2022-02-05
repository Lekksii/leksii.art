<?php
include('telegram.php');

if($_POST['action'] == 'ph_clicked') {
  message_to_telegram("👉🏻 Была нажата кнопка меню \"Про фотографа\".");
}
if($_POST['action'] == 'price_clicked') {
  message_to_telegram("👉🏻 Была нажата кнопка меню \"Послуги\".");
}
if($_POST['action'] == 'portfolio_clicked') {
  message_to_telegram("👉🏻 Была нажата кнопка меню \"Фотокартки\".");
}
if($_POST['action'] == 'video_clicked') {
  message_to_telegram("👉🏻 Была нажата кнопка меню \"Відео\".");
}
if($_POST['action'] == 'inst_clicked') {
  message_to_telegram("👉🏻 Был переход к соц. сети \"Instagram\".");
}
if($_POST['action'] == 'tg_clicked') {
  message_to_telegram("👉🏻 Был переход к соц. сети \"Telegram\".");
}
if($_POST['action'] == 'fb_clicked') {
  message_to_telegram("👉🏻 Был переход к соц. сети \"Facebook\".");
}
if($_POST['action'] == 'try_save') {
  message_to_telegram("🤡 Была попытка сохранить страницу Ctrl+S/Cmd+S.");
}
if($_POST['action'] == 'try_context') {
  message_to_telegram("🤡 Была попытка нажать ПКМ для открытия контекстного меню.");
}
if($_POST['action'] == 'try_source') {
  message_to_telegram("🤡 Была попытка вызвать инструменты разработчика на F12, либо I, либо J, либо U.");
}
?>