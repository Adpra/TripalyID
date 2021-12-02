<section class="triplay-item-option">
    <div class="container">
        <h3>Pilih <span>Diamond</span></h3>
        <div class="button-option__wrapper">
            @foreach ($dataPrices as $data)
            @if ( is_nan($data->price) || $data->price == null )
                <button class="option-item" onclick="getValueItemButton(this);" value="{{ $data->harga }}">{{ $data->item }}</button>   
            @else 
                <button class="option-item" onclick="getValueItemButton(this);" value="{{ $data->price }}">{{ $data->item }}</button>  
            @endif 
            @endforeach
        </div>
    </div>
</section>