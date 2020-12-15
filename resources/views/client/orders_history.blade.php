@extends('client.master')

@section('content')

    <div class="container " style="min-height: 80vh;">
        <div class="row">
            <div class="col">
                <div class="card mt-4" style="min-height: 50vh">
                    <div class="card-header">
                        Orders
                    </div>
                    <div class="card-body">

                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('client.orders.current') }}">Current Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Order History</a>
                            </li>
                        </ul>

                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="orders-table" class="table table-striped table-bordered" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>PRODUCT</th>
                                            <th>STATUS</th>
                                            <th>ORDER DATE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>
                                                    <ul style="list-style: none">
                                                        @foreach(json_decode($order->products) as $product)
                                                            @php $product = \App\Models\Product::find($product) @endphp
                                                            <li>
                                                                <a href="{{ route('client.product', $product->id) }}">{{ $product->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>{{ $order->shiprocket_status }}</td>
                                                <td>{{ $order->created_at }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
