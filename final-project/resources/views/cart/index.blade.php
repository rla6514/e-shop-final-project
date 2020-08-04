@extends('layouts.layout')

@section('content')

<h1>Your Cart</h1>

@foreach($cartItems as $cartItem)
    <div>
        <h2>{{ $cartItem->beer->title }}</h2>

        <h3>{{ $cartItem->beer->product_name }}</h3>

        <p>Count: {{ $cartItem->count }}</p>
    </div>
@endforeach

@auth
@if (Session::has('success_message'))
    
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>

@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<button><a href="/checkout">shipping details</a></button>
@endauth

@guest

<p>
    Please log in to add shipping details: <a href="{{ route('login') }}">Login</a>
</p>

@endguest

@endsection