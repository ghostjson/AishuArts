@extends('admin.master')

@section('content')

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this product permanently?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form method="post" action="{{ route('admin.products.delete') }}">
                        @csrf
                        {{ method_field('DELETE') }}

                        <input type="hidden" id="deleteInput" name="product_id">
                        <button type="submit" class="btn btn-danger">Delete Permanently</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card pb-3">
                @include('partials.error')

                <!-- Card header -->
                    <div class="card-header border-0" style="display: flex">
                        <h3 class="mb-0">Products</h3>
                        <div class="button-group" style="margin-left: auto">
                            <a href="{{ route('admin.products.new') }}" class="btn btn-sm btn-primary">Add Product</a>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="productsTable" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="budget">Price</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($products as $product)
                                <tr>

                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ $product->name }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{ $product->price }}
                                    </td>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-green"></i>
                                        <span class="status">active</span>
                                      </span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                                                <a class="dropdown-item" onclick="deleteProduct({{ $product->id }})" href="#"  data-toggle="modal" data-target="#deleteModal">Delete</a>
                                                {{--                                                <a class="dropdown-item" href="#">Something else here</a>--}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    {{--                    <div class="card-footer py-4">--}}
                    {{--                        <nav aria-label="...">--}}
                    {{--                            <ul class="pagination justify-content-end mb-0">--}}
                    {{--                                <li class="page-item disabled">--}}
                    {{--                                    <a class="page-link" href="#" tabindex="-1">--}}
                    {{--                                        <i class="fas fa-angle-left"></i>--}}
                    {{--                                        <span class="sr-only">Previous</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="page-item active">--}}
                    {{--                                    <a class="page-link" href="#">1</a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="page-item">--}}
                    {{--                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                    {{--                                <li class="page-item">--}}
{{--                                                        <a class="page-link" href="#">--}}
{{--                                                            <i class="fas fa-angle-right"></i>--}}
{{--                                                            <span class="sr-only">Next</span>--}}
{{--                                                        </a>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </nav>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#productsTable').DataTable({
                oLanguage: {
                    oPaginate: {
                        sNext: '<span class="pagination-fa"><i class="fa fa-chevron-right" ></i></span>',
                        sPrevious: '<span class="pagination-fa"><i class="fa fa-chevron-left" ></i></span>'
                    }
                }
            });
        } );


        function deleteProduct (id) {
            console.log(id)
            $('#deleteInput').val(id);
        }

    </script>
@endsection
