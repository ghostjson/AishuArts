@extends('admin.master')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        New Product
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" >
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control" id="tags" >
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input type="text" class="form-control" id="price" >
                            </div>
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control" id="short_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="long_description">Long Description</label>
                                <textarea class="form-control" id="long_description"></textarea>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
