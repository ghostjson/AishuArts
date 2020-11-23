@extends('admin.master')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Shiprocket Credentials</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.shipping.update') }}" method="post">

                            @include('partials.error')

                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" value="{{ settings('shiprocket-email') }}" type="text" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" value="{{ settings('shiprocket-password') }}" type="password" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label for="token">Token</label>
                                <input type="text" disabled class="form-control" value="{{ settings('shiprocket-token') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.shipping.refresh') }}" class="btn btn-dark text-white">Refresh Token</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
