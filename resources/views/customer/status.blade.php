@extends('layouts.user')
@section('content')

 <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="icon-check_circle display-3 text-success"></span>
                <h2 class="display-3 text-black">Thank you!</h2>
                <p class="lead mb-5">You order was successfuly completed.</p>
                <p><a href="/store" class="primary-btn order-submit">Back to store</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection