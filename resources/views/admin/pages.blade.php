@extends('admin.master')

@section('content')


    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Pages</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <ol>
                            <li>
                                <a href="{{ route('admin.pages.home') }}">
                                    Home Page
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.pages.about') }}">
                                    About Page
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.pages.contact') }}">
                                    Contact Page
                                </a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
