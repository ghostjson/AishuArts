@extends('admin.master')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Cashfree Credentials</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.payment.update') }}" method="post">

                            @include('partials.error')

                            @csrf
                            <div class="form-group">
                                <label for="cashfree-app-id">App ID</label>
                                <input class="form-control" value="{{ settings('cashfree-app-id') }}" type="text" name="cashfree-app-id" id="cashfree-app-id">
                            </div>
                            <div class="form-group">
                                <label for="cashfree-secret-key">Secret Key</label>
                                <input class="form-control" value="{{ settings('cashfree-secret-key') }}" type="password" name="cashfree-secret-key" id="cashfree-secret-key">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
