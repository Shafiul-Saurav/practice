<ul>
    @if ($loop->even)
        <div class="bg-success">
            <li>{{ $key }}</li>
            <li>{{ $product['name'] }}</li>
            <li>{{ $product['color'] }}</li>
            <li>{{ $product['price'] }}</li>
        </div>
    @else
        <div class="bg-info">
            <li>{{ $key }}</li>
            <li>{{ $product['name'] }}</li>
            <li>{{ $product['color'] }}</li>
            <li>{{ $product['price'] }}</li>
        </div>
    @endif
</ul>

