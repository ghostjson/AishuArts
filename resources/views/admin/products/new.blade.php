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
                                <label for="image">Product Image 1</label>
                                <input type="file" name="image1" class="form-control" id="image" multiple>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image 2</label>
                                <input type="file" name="image2" class="form-control" id="image" multiple>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image 3</label>
                                <input type="file" name="image3" class="form-control file" id="image" >
                            </div>
                            <input type="hidden" name="featured" value="0">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" class="form-control" id="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="tags">Tags</label>--}}
{{--                                <input name="tags" type="text" class="form-control" id="tags" >--}}
{{--                            </div>--}}
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
