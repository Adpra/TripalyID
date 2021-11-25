<section class="triplay-payment">
    <div class="container">
        <h3>Pembayaran <span>Otomotis</span></h3>
        <div class="auto-payment">
            <div class="card-payment bca-payment">
                <img src="{{ asset('img/bca.png') }}">
                <div class="total-price">
                    <p>Harga :</p>
                    <span>10000</span>
                </div>
                <div class="inc-ppn">
                    <p>Sudah termasuk PPN</p>
                </div>
            </div>
            <div class="card-payment gopay-payment">
                <img src="{{ asset('img/gopay.png') }}">
                <div class="total-price">
                    <p>Harga :</p>
                    <span>10000</span>
                </div>
                <div class="inc-ppn">
                    <p>Sudah termasuk PPN</p>
                </div>
            </div>
        </div>
        <div class="manual-payment">
            <h3>Pembayaran <span>Manual</span></h3>
            <a href="#triplay-manual-payment">
                <div class="card-payment manual-direct">
                    <img src="{{ asset('img/allpayment.png') }}">
                    <div class="total-price">
                        <p>Harga :</p>
                        <span>10000</span>
                    </div>
                    <div class="inc-ppn">
                        <p>Lebih Murah & Sudah Termasuk PPN</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>