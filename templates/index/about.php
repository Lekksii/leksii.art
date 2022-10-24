<section class="block-pos-center info-bg mt-2 mb-1 border-b" id="about">
    <div class="about">
        <div class="avatar-img">
            <img class="avatar" loading="lazy" src="/assets/images/placeholder.webp" data-src="/assets/images/about-img.webp" width="300" height="300" alt="Photographer">
        </div>
        <div class="caption-container">
            <div class="about-text-container f-ua">
                <h2 class="fw400">{{langKey('about_name')}}</h2>
                <h4 style="color: rgb(199 41 41);">{{langKey('about_caption')}}</h4>
                <p v-html="langKey('about_description')" class="border-b f-ua fs10">about.description</p>
            </div>
            <div class="about-social">
                <a class="fs12" href="https://instagram.com/alexey.kd" target="_blank">Instagram</a>
                <a class="fs12" href="tg://resolve?domain=leksiikd">Telegram</a>
                <a class="fs12" href="tel:380955969927">{{langKey('about_phone')}}</a>
            </div>
        </div>
    </div>
</section>