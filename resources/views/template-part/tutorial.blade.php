<section class="triplay-tutorial">
    <div class="container">
        <div class="heading-tutorial">
            <h3>Cara <span>Top Up</span></h3>
            <p>Cara mudah transaksi di triplay indonesia
                silahkan nonton video dibawah ini</p>
        </div>
        <div class="video-wrapper">
            @foreach ($dataVideo as $video)
            <div class="embed-video-wrapper" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <iframe width="560" height="315" src="{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
</section>
