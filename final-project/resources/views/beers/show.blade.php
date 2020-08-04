
@extends('layouts.layout')

@section('content')

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<div class="detail-beer">

  <h1>{{ $beer->product_name }}</h1>
  <h3><strong>Beer-Producer:</strong> {{ $beer->company_name }}</h3>
  <div class="detail-beers">
  <div class="detail-beer_1">

    <img src="{{ $beer->image }}">
  </div>
  <div class="detail-beer_2">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"><h3><strong>Price:</strong> €{{ $beer->alcohol_content }}</h3></th>
    
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><h4 id="description-beers"><strong>Description:</strong> {{ $beer->description }}</h4></th>
    
        </tr>
        <tr>
          <th scope="row"><h4><strong>Alcohol Content:</strong> {{ $beer->alcohol_content }}%</h4></th>
    
        </tr>
        <tr>
          <th scope="row"><h4><strong>Category:</strong> {{ $beer->category }}</h4></th>
    
        </tr>

        <tr>
          <th scope="row"><p class="btn-holder"><a href="{{ url('add-to-cart/'.$beer->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p></th>
    
        </tr>
      </tbody>
    </table>
    
  </div>
  
  




</div>
</div>



@endsection

