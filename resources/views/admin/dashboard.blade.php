@extends('admin.master')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">

                </div>
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            {{ \App\Models\WebsiteStatistics::getCurrentMonthTraffic() }}
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            <i class="ni ni-active-40"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    @if(\App\Models\WebsiteStatistics::trafficChange() > 0)
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\WebsiteStatistics::trafficChange() }}%</span>
                                    @else
                                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> {{ \App\Models\WebsiteStatistics::trafficChange() }}%</span>
                                    @endif
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ \App\Models\WebsiteStatistics::getCurrentMonthNewUsers() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="ni ni-chart-pie-35"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    @if(\App\Models\WebsiteStatistics::usersChange() > 0)
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\WebsiteStatistics::usersChange() }}%</span>
                                    @else
                                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> {{ \App\Models\WebsiteStatistics::usersChange() }}%</span>
                                    @endif
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ \App\Models\WebsiteStatistics::getCurrentMonthSales() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                            <i class="ni ni-money-coins"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    @if(\App\Models\WebsiteStatistics::salesChange() > 0)
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\WebsiteStatistics::salesChange() }}%</span>
                                    @else
                                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> {{ \App\Models\WebsiteStatistics::salesChange() }}%</span>
                                    @endif
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Feedbacks</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ \App\Models\WebsiteStatistics::getCurrentMonthFeedbacks() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="ni ni-chart-bar-32"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    @if(\App\Models\WebsiteStatistics::feedbackChange() > 0)
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\WebsiteStatistics::feedbackChange() }}%</span>
                                    @else
                                        <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> {{ \App\Models\WebsiteStatistics::feedbackChange() }}%</span>
                                    @endif
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
{{--        <div class="row">--}}
{{--            <div class="col-xl-8">--}}
{{--                <div class="card bg-default">--}}
{{--                    <div class="card-header bg-transparent">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col">--}}
{{--                                <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>--}}
{{--                                <h5 class="h3 text-white mb-0">Sales value</h5>--}}
{{--                            </div>--}}
{{--                            <div class="col">--}}
{{--                                <ul class="nav nav-pills justify-content-end">--}}
{{--                                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20.5, 10, 30, 15, 40, 20, 60, 10]}]}}' data-prefix="{{ settings('currency') }}" data-suffix="k">--}}
{{--                                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">--}}
{{--                                            <span class="d-none d-md-block">Month</span>--}}
{{--                                            <span class="d-md-none">M</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <!-- Chart -->--}}
{{--                        <div class="chart">--}}
{{--                            <!-- Chart wrapper -->--}}
{{--                            <canvas id="chart-sales-dark" class="chart-canvas"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header bg-transparent">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col">--}}
{{--                                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>--}}
{{--                                <h5 class="h3 mb-0">Total orders</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <!-- Chart -->--}}
{{--                        <div class="chart">--}}
{{--                            <canvas id="chart-bars" class="chart-canvas"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Recent Orders</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('admin.orders') }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" style="min-height: 300px">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->billing_customer_name}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('admin.orders.view', $order->id) }}">View Order</a>
                                                <a class="dropdown-item" href="">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Featured Products</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('admin.products') }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" style="min-height: 300px">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Reviews</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <a href="{{ route('client.product', $product->id) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>
                                            {{ $product->getRating() }}
                                        </td>
                                        <td>
                                            {{ $product->reviews->count() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2020 <a href="#" class="font-weight-bold ml-1" >AishuArts</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
