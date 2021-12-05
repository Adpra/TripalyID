<section class="triplay-manual-payment" id="triplay-manual-payment">
    <div class="container">
        <div class="centered-line">
            <h3>Masukkan <span>ID</span></h3>
            <div class="form-wrapper">
                <form>
                    {{ csrf_field() }}
                    <P>
                        Pastikan ID game, email, dan nomor anda terisi dengan benar !
                        Kami segera topup diamond game anda langsung   
                    </P>
                    <input type="text" id="game_idMan" placeholder="ID Game" value="">
                    @if ($slug === "mobile-legends")
                    <input type="text" id="serverMan" placeholder="Server" value="">
                    @endif
                    <input type="text" id="nicknameMan" placeholder="Nickname">
                    <select name="payment" id="paymentMan">
                        <option value="BCA">BCA</option>
                        <option value="GOPAY">GOPAY</option>
                        <option value="ALFAMART">ALFAMART</option>
                        <option value="INDOMARET">INDOMARET</option>
                        <option value="MANDIRI">MANDIRI</option>
                    </select>
                    <label for="message">Catatan :</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <input type="hidden" id="priceMan" value="">
                    <input type="hidden" id="itemMan" value="">
                    <input type="hidden" id="gameNameMan" name="gameName" value="{{ $dataItem->name }}">
                    <button type="button" name="pay" id="pay" onclick="payManual();">Pay</button>
                </form>
            </div>
        </div>
    </div>
</section>