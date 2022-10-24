<section class="price mt-1" id="price">
    <div class="price-container">
        <h4 class="block-title pb-1"><strong>{{langKey('price_title')}}</strong></h4>
        <v class="price-photo">
            <div class="card-title-price f-ua">
                <h2>{{langKey(dataKey('price_section')[0]['title'])}}</h2>
                <h2 v-if="dataKey('price_section')[0]['per_hour']">{{dataKey('price_section')[0]['currency']}}{{dataKey('price_section')[0]['price']}}/{{langKey('price_photo_hour')}}</h2>
                <h2 v-else>{{dataKey('price_section')[0]['currency']}}{{dataKey('price_section')[0]['price']}}</h2>
            </div>
            <div v-if="dataKey('price_section')[0]['show_mono']" class="card-title-price f-ua">
                <h2> </h2>
                <h5 style="margin-top: -22px; border-top: solid;">₴{{getMono()}}</h5>
            </div>
            <p v-html="langKey(dataKey('price_section')[0]['caption'])" class="f-ua pb-1 fs13">price_photo_description</p>
            <p v-html="langKey(dataKey('price_section')[0]['warning'])" class="warning">price_photo_warning</p>   
        </div>  
        <div class="price-video">
            <div class="card-title-price f-ua">
                <h2>{{langKey('price_video_title')}}</h2>
                <h2 v-if="dataKey('price_section')[1]['per_hour']">{{dataKey('price_section')[1]['currency']}}{{dataKey('price_section')[1]['price']}}/{{langKey('price_photo_hour')}}</h2>
                <h2 v-else>{{dataKey('price_section')[1]['currency']}}{{dataKey('price_section')[1]['price']}}</h2>
            </div>
            <div v-if="dataKey('price_section')[1]['show_mono']" class="card-title-price f-ua">
                <h2> </h2>
                <h5 style="margin-top: -22px; border-top: solid;">₴{{getMono()}}</h5>
            </div>
            <p v-html="langKey(dataKey('price_section')[1]['caption'])" class="f-ua pb-1 fs13">price_video_description</p>
            <p v-html="langKey(dataKey('price_section')[1]['warning'])" v-if="dataKey('price_section')[1]['warn']" class="warning">price_video_warning</p>   
        </div>
    </div>
</section>