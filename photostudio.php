
<!DOCTYPE html>
<html lang="uk"   >
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Фотостудія, особистий кабінет фотографа">
  
  
  <title>Photostudio.ART</title>
  <link rel="stylesheet" href="/assets/material-design/css/material-icons.min.css">
  <link rel="stylesheet" href="https://leksii.art/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Fjalla+One:400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One:400&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
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
  }
}, false);

//Запуск алерт-окна только тогда, когда страница прогрузится и загрузит jquery и bootstrap
function ALERT(modalName){
    $( document ).ready(function() {
        OpenModal(modalName);
    });
}
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


  
  <section data-bs-version="5.1" class="menu menu3 cid-sVsJPUHt0W" once="menu" id="menu3-FhsqXXX0NH-z">
    
    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="/photostudio">PHOTOSTUDIO&nbsp;🛠</a></span>
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
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://leksii.art"><span class="material material-arrow-back mbr-iconfont mbr-iconfont-btn"></span>Назад до сайту</a>
                    </li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section class="mbr-section" id="witsec-modal-window-block-15" data-rv-view="545">



	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div><div class="modal fade" id="login-empty" tabindex="-1" role="dialog" aria-labelledby="login-trueLabel" aria-hidden="true">  <div class="modal-dialog  modal-dialog-centered" style="height:auto" role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="login-emptyLabel"><strong>Увага!</strong></h5>  <a href="#" class="no-anim close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="login-empty_body">Ви намагаєтесь зайти в кабінет не ввівши код доступу!</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-bs-dismiss="modal" data-dismiss="modal">Добре</a></div></div>    </div>  </div></div><script> 
document.addEventListener("DOMContentLoaded", function() { 
  if(typeof jQuery === "function") {
    $("#login-true").on("hidden.bs.modal", function () { 
      var html = $( "#login-empty_body" ).html(); 
      $( "#login-empty_body" ).empty(); 
      $( "#login-empty_body" ).append(html); 
    }) 
  } else { 
      var mdw = document.getElementById("#login-empty") 
      mdw.addEventListener("hidden.bs.modal", function(event) { 
        mdw.innerHTML = mdw.innerHTML; 
      }); 
  } 
}); 
</script></div>

	<script>
	
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if(typeof jQuery === "function") {
				if ($('#' + modalName).length)
					$('#' + modalName).modal('show');
				else
					alert("Sorry, but there is no modal for " + modalName);
			} else {
				let mdw = new bootstrap.Modal(document.getElementById(modalName), {});
				mdw.show();
			}
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>

<section class="mbr-section" id="witsec-modal-window-block-16" data-rv-view="546">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>
 
	<div><div class="modal fade" id="login-fail" tabindex="-1" role="dialog" aria-labelledby="login-failLabel" aria-hidden="true">  <div class="modal-dialog  modal-dialog-centered" style="height:auto" role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="login-failLabel"><strong>Увага!</strong></h5>  <a href="#" class="no-anim close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="login-fail_body">Авторизація неможлива! Невірно введений пароль!.</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-bs-dismiss="modal" data-dismiss="modal">Добре</a></div></div>    </div>  </div></div>
	<script> 
document.addEventListener("DOMContentLoaded", function() { 
  if(typeof jQuery === "function") {
    $("#login-fail").on("hidden.bs.modal", function () { 
      var html = $( "#login-fail_body" ).html(); 
      $( "#login-fail_body" ).empty(); 
      $( "#login-fail_body" ).append(html); 
    }) 
  } else { 
      var mdw = document.getElementById("#login-fail") 
      mdw.addEventListener("hidden.bs.modal", function(event) { 
        mdw.innerHTML = mdw.innerHTML; 
      }); 
  } 
}); 
</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if(typeof jQuery === "function") {
				if ($('#' + modalName).length)
					$('#' + modalName).modal('show');
				else
					alert("Sorry, but there is no modal for " + modalName);
			} else {
				let mdw = new bootstrap.Modal(document.getElementById(modalName), {});
				mdw.show();
			}
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>
	<script>
	    $('body').on('input', '.input-number', function(){
	    this.value = this.value.replace(/[^0-9]/g, '');
        });
	</script>
	
	

</section>

<section data-bs-version="5.1" class="header2 cid-sVsJPWgg37 mbr-fullscreen" id="header2-10">

<?php
include('code/telegram.php');
$n = PHP_EOL;


if (isset($_GET['error']))
{
    echo '<script>
    ALERT(\'login-fail\');
    </script>';
     #message_to_telegram("<b>photostudio.php</b>".$n.$n."_GET error: ".$_GET['error']);
 }
 if (isset($_GET['empty_field']))
{
    echo '<script>
    ALERT(\'login-empty\');
    </script>';
    #header('Location: javasript:OpenModal(\'login-empty\')');
    # message_to_telegram("<b>photostudio.php</b>".$n.$n."_GET empty_field: ".$_GET['empty_field']);
 }
 ?>

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(4, 6, 5);"></div>
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h1 class="mbr-section-title mbr-fonts-style mb-3 text_ua display-5"><strong>Особистий кабінет<br>фотографа 📷</strong></h1>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="/code/studio_login.php" method="POST" class="mbr-form form-with-styler mx-auto">
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="login_code">
                            <input type="text" name="login_code" maxlength="4" placeholder="Код доступу" data-form-field="login_code" class="form-control input-number" value="">
                        </div>
                        
                        <div class="col-auto mbr-section-btn align-center"><button type="submit" click="OpenModal(\'login-fail\')"class="btn btn-secondary display-4" id="studio_login">Увійти</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('templates/foo_trap.php'); ?>
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  
  </body>
</html>