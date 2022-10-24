<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
isAuth();
?>

<!DOCTYPE html>
<html lang="uk"   >
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Фотостудія, особистий кабінет фотографа">
  
  
  <title>.ART Studio</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Fjalla+One:400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One:400&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>

<!-- Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9NFB68VWDY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9NFB68VWDY');
</script>
<!-- /Analytics -->

<script> document.oncontextmenu = cmenu; function cmenu() { return false; } </script>
<script> 
document.addEventListener("keydown", function(e) {
  if (e.key === 's' && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
    e.preventDefault();
    //alert('Ага, попався! 😏');
  }
}, false);
</script>
<style>img {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-user-drag: none;
  user-drag: none;
  -webkit-touch-callout: none;
}</style>

<script type="text/javascript">
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
</script>

<script type="text/javascript">
document.ondblclick = function(evt) {
    if (window.getSelection)
        window.getSelection().removeAllRanges();
    else if (document.selection)
        document.selection.empty();
}

var _tripleClickTimer = 0;
var _mouseDown = false;

document.onmousedown = function() {
    _mouseDown = true;
};

document.onmouseup = function() {
    _mouseDown = false;
};

document.ondblclick = function DoubleClick(evt) {
    ClearSelection();
    window.clearTimeout(_tripleClickTimer);

    //handle triple click selecting whole paragraph
    document.onclick = function() {
        ClearSelection();
    };

    _tripleClickTimer = window.setTimeout(RemoveDocumentClick, 1000);
};

function RemoveDocumentClick() {
    if (!_mouseDown) {
        document.onclick = null; 
        return true;
    }

    _tripleClickTimer = window.setTimeout(RemoveDocumentClick, 1000);
    return false;
}

function ClearSelection() {
    if (window.getSelection)
        window.getSelection().removeAllRanges();
    else if (document.selection)
        document.selection.empty();
}

</script>


</script>
  
  <section data-bs-version="5.1" class="menu menu3 cid-sVtKHF7QZZ" once="menu" id="menu3-FhsqXXX0NH-17">
    
    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="<?= "/studio?u=".$_COOKIE['hash'] ?>">PHOTOSTUDIO&nbsp;🛠</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><p class="nav-link link text-black text-primary display-4">Привіт, <?= $user['name'] ?></p></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/code/studio_login.php?logout" id="exit"><span class="mobi-mbri mobi-mbri-undo mbr-iconfont mbr-iconfont-btn"></span>Головна</a>
                    </li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header2 cid-sVtLyR2KD2 mbr-fullscreen" id="header2-1d">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(4, 6, 5);"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>.ART Studio v1.0</strong></h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-4">Інструмент для роботи з клієнтами</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content17 cid-sVtMJiTNn7" id="content17-1f">

    

    
    
    <div class="container">
        
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-head align-center mb-4">
                        <h3 class="mbr-section-title mb-0 mbr-fonts-style display-5">
                            <strong>Замовлення</strong></h3>
                        
                    </div>
                    
                    <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_2" aria-expanded="false" aria-controls="collapse1">
                                    <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Замовлення #{id}</strong></h6>
                                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse1_2" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">Послуга: {posluga}</p>
                                    <p class="mbr-fonts-style panel-text display-4">Замовник: {name}</p>
                                    <p class="mbr-fonts-style panel-text display-4">Telegram: <a href="/" class="text-primary">{social_tg}</a></p>
                                    <p class="mbr-fonts-style panel-text display-4">Instagram: <a href="/" class="text-primary">{social_inst}</a></p>
                                    <p class="mbr-fonts-style panel-text display-4">Дата: {date}</p>
                                    <p class="mbr-fonts-style panel-text display-4">Час: {time}</p>
                                    <p class="mbr-fonts-style panel-text display-4">Статус: {status}</p>
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>
        </div>
</section>

<?php include('templates/foo_trap.php'); ?>
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>