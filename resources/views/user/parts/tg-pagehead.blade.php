<div class="tg-pagehead">
    <figure class="tg-tutordp">
        <a href="#"><img id="img_prev" src="{{$user->avatar()}}" height="120" width="120" alt="image description"></a>
        <figcaption>
            <a class="tg-usericon tg-iconfeatured" href="#">
                <em class="tg-usericonholder">
                    <!-- <i class="fa fa-bolt"></i> -->
                    <!-- <span>featured</span> -->
                </em>
            </a>
            <a class="tg-usericon tg-iconvarified" href="#">
                <em class="tg-usericonholder">
                    <!-- <i class="fa fa-shield"></i> -->
                    <!-- <span>varified</span> -->
                </em>
            </a>
        </figcaption>
    </figure>
    <div class="tg-tutorinfo">
        <!-- <a class="tg-btnedit" href="#"><i class="fa fa-pencil"></i></a> -->
        <div class="tg-jobhead">
            <h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
            <div class="tg-subjects">{{ implode(', ',$user->subjectsArray()) }}</div> 
            <ul class="tg-jobsmetadata">
                <!-- <li><span class="tg-stars"><span></span></span></li> -->
                <!-- <li><a href="#">1509 view</a></li> -->
            </ul>
        </div>
    </div>
</div>