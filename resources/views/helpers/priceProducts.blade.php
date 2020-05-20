@can('show-discount')
@if ( $product->sconto == 0 ) 
<div class="og_price"> {{ number_format($product->getPrice(), 2, ',', '.') }}€ </div>
@else
<div class="og_price_crossed">{{ number_format($product->getPrice(), 2, ',', '.') }}€</div>
<div class="discount">-{{ $product->sconto }}% Sconto</div>
<div class="discounted_price">{{ number_format($product->getPrice(true), 2, ',', '.') }}€</div>
@endif

@else
<div class="og_price"> {{ number_format($product->getPrice(), 2, ',', '.') }}€ </div>
@endcan