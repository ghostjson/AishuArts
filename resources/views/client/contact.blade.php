@extends('client.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>{{ $page->content->description }}</p>
                    <div class="social-icons m-t-30 social-icons-colored">
                        <ul>
                            <li class="social-instagram"><a target="_blank" href="{{ $page->content->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('client.contact.post') }}" method="post">
                        @csrf
                        @include('partials.error')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" required name="name" class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" required name="email" class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="subject" required class="form-control required" placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="content" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>
                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
