<section class="triplay-voucher-list">
    <div class="container">
        <div class="heading-voucher">
            <h3>Top Up <span>Kuota</span></h3>
            <p>Daftar kuota internet dan paket data
                All operator  </p>
        </div>
        <div class="voucher-list__wrapper row">
            @foreach ($dataVoucher as $voucher)
            <div class="card-voucher col-lg-4 col-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <img src="{{ asset('storage/'.$voucher->image) }}" alt="telkomsel">
                <a class="button-shop" href="/checkout/pulsa/{{ $voucher->slug }}">BELI</a>
                <div class="voucher-name">
                    <h2>{{ $voucher->name }}</h2>
                </div>
            </div>  
            @endforeach
        </div>
    </div>
</section>