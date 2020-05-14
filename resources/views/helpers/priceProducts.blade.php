<p class="price"> {{ number_format($product->getPrice($product->prezzo), 2, ',', '.') }} € </p>

@if ($product->prezzo == 1)
<p class="discprice"> Valore <del>{{ number_format($product->getPrice(false), 2, ',', '.') }} €</del><br>
    Sconto {{ $product->sconto }}%</p>
@endif