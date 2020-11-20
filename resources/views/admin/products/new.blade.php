@extends('admin.master')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        New Product
                    </div>

                    <div class="container">
                        @include('partials.error')
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.products.new.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control" id="name" >
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image</label>
                                <input type="file" name="image" class="form-control" id="image" >
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" class="form-control" id="category">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input name="tags" type="text" class="form-control" id="tags" >
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input name="price" type="text" class="form-control" id="price" >
                            </div>
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea name="short_description" class="form-control" id="short_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="long_description">Long Description</label>
                                <textarea name="long_description" class="form-control" id="long_description"></textarea>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
