@extends('admin.master')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Contact Page</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.pages.contact.update') }}" enctype="multipart/form-data"> @csrf
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" value="{{ $page->content->description }}"  type="text" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input class="form-control" value="{{ $page->content->instagram }}"   type="text" id="instagram" name="instagram">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
