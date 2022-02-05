<!-- Запрет контекстного меню (ПКМ) -->
<script>
document.oncontextmenu = cmenu; 
    function cmenu() { 
        $.ajax({
                type: "POST",
                url: '/code/on_click.php',
                data:{action:'try_context'}
            }); 
        return false; 
} 
</script>

<!-- Запрет сохранения страницы как файла на Виндовс и Мак -->
<script> 
document.addEventListener("keydown", function(e) {
  if (e.key === 's' && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
    e.preventDefault();
    //OpenModal("wip")
    $.ajax({
                type: "POST",
                url: '/code/on_click.php',
                data:{action:'try_save'}
            }); 
  }
}, false);
</script>

<!-- Запрет сохранения изображений (фото) -->
<style>
img {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-user-drag: none;
  user-drag: none;
  -webkit-touch-callout: none;
}</style>

<!-- Запрет комбинации клавишь для вызова инструментов разработчика -->
<script type="text/javascript">
document.onkeydown = function(e) {
if(event.keyCode == 123) {
    $.ajax({
                type: "POST",
                url: '/code/on_click.php',
                data:{action:'try_source'}
            }); 
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
    $.ajax({
                type: "POST",
                url: '/code/on_click.php',
                data:{action:'try_source'}
            }); 
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
    $.ajax({
                type: "POST",
                url: '/code/on_click.php',
                data:{action:'try_source'}
            }); 
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
    $.ajax({
                type: "POST",
                url: '/code/on_click.php',
                data:{action:'try_source'}
            }); 
return false;
}
}
</script>

<!-- Запрет выделения текста -->
<script type="text/javascript">
//Запуск алерт-окна только тогда, когда страница прогрузится и загрузит jquery и bootstrap
function ALERT(modalName){
    $( document ).ready(function() {
        OpenModal(modalName);
    });
}

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