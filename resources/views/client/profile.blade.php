@extends('client.master')

@section('content')
    <form method="post" action="{{ route('client.profile.update') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Profile</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <button href="#!" type="submit" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>

                            @include('partials.error')
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">UserID</label>
                                                <input disabled type="text" id="input-username" class="form-control"
                                                       placeholder="UserID" value="{{ auth()->user()->id }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email
                                                    address</label>
                                                <input name="email" type="email" id="input-email" class="form-control"
                                                       value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-full-name">Full
                                                    Name</label>
                                                <input name="name" type="text" id="input-full-name" class="form-control"
                                                       placeholder="Full Name" value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-full-name">Phone Number</label>
                                                <input name="phone" type="text" id="input-full-name" class="form-control"
                                                       placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr class="my-4"/>
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Delivery information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <input name="address1" id="input-address" class="form-control"
                                                       placeholder="Home Address" value="{{ auth()->user()->address1 }}"
                                                       type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address2">Apartment/Suite/Unit
                                                    etc</label>
                                                <input name="address2" id="input-address2" class="form-control"
                                                       placeholder="Apartment/Suite/Unit etc"
                                                       value="{{ auth()->user()->address2 }}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-city">City/Town</label>
                                                <input name="city" type="text" id="input-city" class="form-control"
                                                       placeholder="City" value="{{ auth()->user()->city }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">State</label>
                                                <input name="state" type="text" id="input-country" class="form-control"
                                                       placeholder="State" value="{{ auth()->user()->state }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Country</label>
                                                <input disabled type="text" id="input-country" class="form-control"
                                                       placeholder="Country" value="{{ auth()->user()->country }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Postal
                                                    code</label>
                                                <input name="zip" type="number" id="input-postal-code" class="form-control"
                                                       placeholder="Postal code" value="{{ auth()->user()->zip }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
