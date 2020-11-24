@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <h3>Order Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="productsTable" class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Attribute</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $order->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Customer Name</td>
                                            <td>{{ $order->billing_customer_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>{{ $order->billing_address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address 2</td>
                                            <td>{{ $order->billing_address_2 }}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{ $order->billing_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pincode</td>
                                            <td>{{ $order->billing_pincode }}</td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td>{{ $order->billing_state }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>{{ $order->billing_country }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $order->billing_email }}</td>
                                        </tr>

                                        <tr>
                                            <td>Phone</td>
                                            <td>{{ $order->billing_email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>{{ $order->billing_phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Payment Method</td>
                                            <td>{{ $order->payment_method }}</td>
                                        </tr>
                                        <tr>
                                            <td>Products</td>
                                            <td>
                                                <ol>
                                                    @foreach($products as $product)
                                                        <li><a href="{{ route('client.product', $product->id) }}">{{$product->name}}</a></li>
                                                    @endforeach
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $order->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Order Date</td>
                                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
