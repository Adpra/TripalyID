<section class="triplay-auto-payment" id="triplay-auto-payment">
    <div class="container">
        <div class="centered-line">
            <h3>Masukkan <span>ID</span></h3>
            <div class="form-wrapper">
                <form action="/payment/gopay" method="POST" id="form-token">
                    {{ csrf_field() }}
                    <P>
                        Pastikan ID game, email, dan nomor anda terisi dengan benar !
                        Kami segera topup diamond game anda langsung   
                    </P>
                    <input type="text" id="game_id" name="game_id" placeholder="ID Game">
                    @if ( $slug === "mobile-legends")
                    <input type="text" id="server" name="server" placeholder="Server">
                    @endif
                    <input type="text" id="nickname" name="nickname" placeholder="Nickname">
                    <input type="text" id="number" name="number" placeholder="Nomor Whatsapp">
                    <input type="text" id="sender" name="sender" placeholder="Nama Pengirim">
                    <label for="message">Catatan :</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <input type="hidden" id="price" name="price" value="">
                    <button type="submit" name="pay" id="pay">Pay</button>
                </form>
            </div>
        </div>
    </div>
</section> 