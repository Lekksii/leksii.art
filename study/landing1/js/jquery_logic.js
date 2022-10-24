$("#features").mouseenter(function(){
    $('#dropdown').css("display", "block");
    });
$('#dropdown').mouseleave(function(){
    $('#dropdown').css("display", "none");
    });

    $(window).scroll(function() { 
    if ($('#dropdown').css('display') == "block") {
        $('#dropdown').css("display", "none");
    }});

$("#mobile-menu-btn").click(function(){
    $("#mobile-navmenu").css("transition","0.3s ease");
    $("#mobile-navmenu").css("transform","translateX(0)");
});

$("#mobile-navmenu-close").click(function(){
    $("#mobile-navmenu").css("transform","translateX(100%)");
    $("#features_list").css("display","none");
});

$("#features_mobile").click(function(){
    if($('#features_list').css('display') == "flex"){
        $("#features_list").css("display","none");
    }else{
        $("#features_list").css("display","flex");
    }
});