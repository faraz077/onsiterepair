@extends('layouts.app')
@section('content')


<div class="thank-body">

<div class="thank-you-container">
    <img src="{{asset('public/images/thank-you.png')}}" alt="Thank You Image" class="thank-you-image">
    <h2 class="thank-you-heading">Thank You for Your Purchase!</h2>
    <p class="thank-you-message">Your order has been successfully placed. Our customer care will contact you soon.</p>
    <a href="{{ url('/') }}" class="back-to-home">Back to Home</a>
</div>

</div>


@endsection
