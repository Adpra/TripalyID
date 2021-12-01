<section class="triplay-banner">
    <div class="container">
        <div class="banner-wrapper">
            <div class="single-banner">
                <img class="freeze-banner" src="{{ asset('storage/'.$dataBanner[0]->image) }}">
            </div>
            <div class="double-banner autoplay">
                @foreach ($dataSlider as $slider)
                <div class="slick-banner">
                    <img src="{{ asset('storage/'.$slider->image) }}">
                </div>
                @endforeach
            </div>
        </div>
    </div> 
</section>