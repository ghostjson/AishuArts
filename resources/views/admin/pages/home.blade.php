@extends('admin.master')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Home Page</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.pages.home.update') }}"> @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" value="{{ $page->content->title }}"  type="text" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input class="form-control" value="{{ $page->content->subtitle }}"   type="text" id="subtitle" name="subtitle">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
