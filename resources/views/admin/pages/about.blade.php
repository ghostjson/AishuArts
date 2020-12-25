@extends('admin.master')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>About Page</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.pages.about.update') }}" enctype="multipart/form-data"> @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" value="{{ $page->content->name }}"  type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input class="form-control" value="{{ $page->content->subtitle }}"   type="text" id="subtitle" name="subtitle">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" value="{{ $page->content->description }}"   type="text" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
