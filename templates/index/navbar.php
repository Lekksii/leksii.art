<div id="nav-menu">
<header>
    <a class = "logo f-ua" href="/">Leksii</a>
    <nav>
        <ul class="nav-btns">
            <li class="border-r lh12"><a v-text="langKey('menu_about')" class="nav-label" href="#about" onclick="onPhClick()">Фотограф</a></li>
            <li class="border-r lh12"><a v-text="langKey('menu_photos')" class="nav-label" href="#photos" onclick="onPortfolioClick()">Фото</a></li>
            <li class="border-r lh12"><a v-text="langKey('menu_videos')" class="nav-label" href="#videos" onclick="onVideoClick()">Відео</a></li>
            <li><a v-text="langKey('menu_price')" class="nav-label" href="#price" onclick="onPriceClick()">Послуги</a></li>
        </ul>
    </nav>
    <div class="dropdown" style="display: none;">
        <a class="mobile-menu" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-list"></i></a>
        <ul class="dropdown-menu f-ua" aria-labelledby="dropdownMenuLink">
        <li><a v-text="langKey('menu_about')" class="dropdown-item" href="#about" onclick="onPhClick()">Фотограф</a></li>
        <li><a v-text="langKey('menu_photos')" class="dropdown-item" href="#photos" onclick="onPortfolioClick()">Фото</a></li>
        <li><a v-text="langKey('menu_videos')" class="dropdown-item" href="#videos" onclick="onVideoClick()">Відео</a></li>
        <li><a v-text="langKey('menu_price')" class="dropdown-item" href="#price" onclick="onPriceClick()">Послуги</a></li>
        <li><hr></li>
        <li><a @click="setLang('ua')" class="dropdown-item" href="#nav-menu" >UA 🇺🇦</a></li>
        <li><a @click="setLang('en')" class="dropdown-item" href="#nav-menu" >EN 🇬🇧</a></li>
        </ul>
    </div>
    <a class = "inst" href="https://instagram.com/alexey.kd" target="_blank" onclick="onTgClick()"><i class="bi bi-instagram"></i></a>
    <a class="mobile-menu" href="#" id="mobile_open_menu" style="margin: 0 6px;"><i class="bi bi-list mob-menu-list"></i></i></a>
</header>
<div class="language" style="text-align: center; margin-top: -1.3rem;">
    <a @click="setLang('ua')" class="fs12 f-ua nav-label border-r" href="#nav-menu" style="padding-inline: 5px;">UA 🇺🇦</a>
    <a @click="setLang('en')" class="fs12 f-ua nav-label" href="#nav-menu" style="padding-inline: 5px;">EN 🇬🇧</a>
</div>
<div class="mobile__navmenu" style="" id="mobile_menu">
        <span class="mobile_menu_title">{{langKey('menu')}}</span>
        <a class="mobile_menu_close" href="#" id="mobile_menu_close"><i class="bi bi-x-lg"></i></a>
        <a v-text="langKey('menu_about')" class="dropdown-item" href="#about" onclick="onPhClick()" id="mobile_menu_about">Фотограф</a>
        <a v-text="langKey('menu_photos')" class="dropdown-item" href="#photos" onclick="onPortfolioClick()" id="mobile_menu_ph">Фото</a>
        <a v-text="langKey('menu_videos')" class="dropdown-item" href="#videos" onclick="onVideoClick()" id="mobile_menu_vid">Відео</a>
        <a v-text="langKey('menu_price')" class="dropdown-item" href="#price" onclick="onPriceClick()" id="mobile_menu_price">Послуги</a>
        <div class="language_mobile_menu" style="text-align: center; margin-top: -1.3rem;">
            <a @click="setLang('ua')" class="fs20 f-ua nav-label" href="#nav-menu" style="padding-inline: 5px;" id="mobile_menu_ua">UA 🇺🇦</a>
            <a @click="setLang('en')" class="fs20 f-ua nav-label" href="#nav-menu" style="padding-inline: 5px;" id="mobile_menu_en">EN 🇬🇧</a>
        </div>
    </div>
<script src="code/navbar.js"></script>
</div>