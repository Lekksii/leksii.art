function onPhClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'ph_clicked'}
    });
}
function onPriceClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'price_clicked'}
    });
}
function onPortfolioClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'portfolio_clicked'}
    });
}
function onVideoClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'video_clicked'}
    });
}
function onInstClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'inst_clicked'}
    });
}
function onTgClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'tg_clicked'}
    });
}
function onFbClick() {
    $.ajax({
        type: "POST",
        url: '/code/on_click.php',
        data:{action:'fb_clicked'}
    });
}