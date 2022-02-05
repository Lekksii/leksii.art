<section>
<header>
    <a class = "logo f-ua" href="/"></i>Leksii</a>
    <nav>
        <ul class="nav-btns">
            <li class="border-r lh12"><a class="nav-label" href="#about" onclick="onPhClick()">Фотограф</a></li>
            <li class="border-r lh12"><a class="nav-label" href="#photos" onclick="onPortfolioClick()">Фото</a></li>
            <li class="border-r lh12"><a class="nav-label" href="#videos" onclick="onVideoClick()">Відео</a></li>
            <li><a class="nav-label" href="#price" onclick="onPriceClick()">Послуги</a></li>
        </ul>
    </nav>
    <div class="dropdown">
        <a class="mobile-menu" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
        <ul class="dropdown-menu f-ua" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#about" onclick="onPhClick()">Фотограф</a></li>
        <li><a class="dropdown-item" href="#photos" onclick="onPortfolioClick()">Фото</a></li>
        <li><a class="dropdown-item" href="#videos" onclick="onVideoClick()">Відео</a></li>
        <li><a class="dropdown-item" href="#price" onclick="onPriceClick()">Послуги</a></li>
        </ul>
    </div>
    <a class = "inst" href="https://instagram.com/alexey.kd" target="_blank" onclick="onTgClick()"><i class="fab fa-instagram"></i></a>
</header>
<script>
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
            </script>
</section>