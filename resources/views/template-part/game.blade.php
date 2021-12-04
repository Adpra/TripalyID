<section class="triplay-game-list">
    <div class="container">
        <div class="heading-game" id="game-point">
            <h3>Top Up <span>Game</span></h3>
            <p>Daftar top up games online
               Dijamin 100 % aman dan pengisian cepat </p>
        </div>
        <div class="game-list__wrapper row">
            @foreach ($dataGame as $game)
                <div class="card-game col-lg-4 col-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <img src="{{ asset('storage/'.$game->image) }}" alt="{{ $game->nama }}">
                    <a class="button-shop" href="/checkout/game/{{ $game->slug }}">BELI</a>
                    <div class="game-name">
                        <h2>{{ $game->name }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div> 
</section>