<h1>Available Products</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Stock Level</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock }} units</td>
            </tr>
        @endforeach
    </tbody>
</table>