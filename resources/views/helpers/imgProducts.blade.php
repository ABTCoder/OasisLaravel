@php
        if (empty($imgFile)) {
            $imgFile = 'smartphone.png';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ asset('images/products_images/' . $imgFile) }}" {!! $attrs !!}>