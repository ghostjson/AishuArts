@extends('client.master')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3>Order</h3>
            </div>
        </div>
        <div class="row mt-3" style="min-height: 50vh;">
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
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $('#orders-table').DataTable();
        });
    </script>
@endsection
