<table>
    <thead>
    <tr>
        <th>#SL</th>
        <th>Shipping Id</th>
        <th>Product Name</th>
        <th>Color Name</th>
        <th>Size Name</th>
        <th>Quantity</th>
        <th>Product Price</th>
        <th>Order Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $order->shipping_id }}</td>
            <td>{{ $order->product->title }}</td>
            <td>{{ $order->get_color->color_name }}</td>
            <td>{{ $order->get_size->size_name }}</td>
            <td>{{ $order->quantity }}</td>
            <td>${{ $order->product_unit_price }}</td>
            <td>{{ $order->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
