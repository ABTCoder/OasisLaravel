@php
        if (empty($imgFile)) {
            $imgFile = 'smartphone.png';
        }

@endphp
<img id="p_img" src="{{ asset('images/products_images/' . $imgFile) }}" alt="dispositivo">