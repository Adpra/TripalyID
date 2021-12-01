<section class="triplay-item-option">
    <div class="container">
        <h3>Pilih <span>Diamond</span></h3>
        <div class="button-option__wrapper">
            @foreach ($dataPrices as $data)
            <button class="option-item" onclick="getValueItemButton(this);" value="{{ $data->price }}">{{ $data->item }}</button>   
            @endforeach
        </div>
    </div>
</section> 