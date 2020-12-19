@extends('client.master')

@section('content')
    <link rel="stylesheet" href="/css/star-rating-svg.css">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Write a review
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('client.review.post', $product->id) }}">
                    @csrf
                    <div class="my-rating"></div>
                    <input type="hidden" name="rating" value="5" id="rating">
                    <div class="form-group mt-4">
                        <label class="sr-only" for="review">Write review</label>
                        <textarea placeholder="Review here..." name="review" class="form-control" id="review" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.star-rating-svg.js"></script>

    <script>
        $(".my-rating").starRating({
            initialRating: 5,
            strokeColor: '#894A00',
            strokeWidth: 10,
            starSize: 25,
            callback: function (currentRating, $el){
                $('#rating').val(currentRating);
            }
        });
    </script>
@endsection
