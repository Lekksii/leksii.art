<section class="price mt-1" id="price">
    <div class="price-container">
        <h4 class="block-title pb-1"><strong>{{langKey('price_title')}}</strong></h4>
        <div class="price-photo">
            <div class="card-title-price f-ua">
                <h2>{{langKey('price_photo_title')}}</h2>
                <h2>$40/{{langKey('price_photo_hour')}}</h2>
            </div>
            <p v-html="langKey('price_photo_description')" class="f-ua pb-1 fs13">price_photo_description</p>
            <p v-html="langKey('price_photo_warning')" class="warning">price_photo_warning</p>   
        </div>  
        <div class="price-video">
            <div class="card-title-price f-ua">
                <h2>{{langKey('price_video_title')}}</h2>
                <h2><b>$200</b></h2>
            </div>
            <p v-html="langKey('price_video_description')" class="f-ua pb-1 fs13">price_video_description</p>
           
        </div>
    </div>
</section>