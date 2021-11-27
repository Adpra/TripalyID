<section class="triplay-auto-payment" id="triplay-auto-payment">
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
                    <input type="text" id="nickname" name="nickname" placeholder="Nickname">
                    <input type="text" id="number" name="number" placeholder="Nomor Whatsapp">
                    <button type="submit" name="pay" id="pay">Pay</button>
                </form>
            </div>
        </div>
    </div>
</section> 