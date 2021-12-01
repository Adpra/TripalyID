<section class="triplay-manual-payment" id="triplay-manual-payment">
    <div class="container">
        <div class="centered-line">
            <h3>Masukkan <span>ID</span></h3>
            <div class="form-wrapper">
                <form action="" method="POST">
                    {{ csrf_field() }}
                    <P>
                        Pastikan ID game, email, dan nomor anda terisi dengan benar !
                        Kami segera topup diamond game anda langsung   
                    </P>
                    <input type="text" id="game_id" name="game_id" placeholder="ID Game">
                    @if ($slug === "mobile-legends")
                    <input type="text" id="server" name="server" placeholder="Server">
                    @endif
                    <input type="text" id="nickname" name="nickname" placeholder="Nickname">
                    <input type="text" id="number" name="number" placeholder="Nomor Whatsapp">
                    <select name="payment" id="payment">
                        <option value="">BCA</option>
                        <option value="">GOPAY</option>
                        <option value="">ALFAMART</option>
                        <option value="">INDOMARET</option>
                        <option value="">MANDIRI</option>
                    </select>
                    <label for="message">Catatan :</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <button type="submit" name="pay" id="pay">Pay</button>
                </form>
            </div>
        </div>
    </div>
</section>