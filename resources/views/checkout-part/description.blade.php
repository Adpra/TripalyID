<section class="triplay-checkout-description">
    <div class="container">
        <div class="checkout-banner-wrapper">
            <img src="{{ asset('storage/'.$dataGame->imageCheckout) }}" alt="Game Name">
        </div>
        <div class="checkout-detail">
            <h2 class="checkout-game-title">{{ $dataGame->name }}</h2>
            <p> {{ $dataGame->description }} </p>
                <p>Bingung cara top up di Triplay.id? <a href="#">Klik disini</a></p>
        </div>
    </div>
</section> 