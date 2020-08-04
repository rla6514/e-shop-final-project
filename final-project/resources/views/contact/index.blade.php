@extends('layouts.layout')

@section('content')
  <div class="shipping">
  <form action="{{ action('ContactController@store')}}" method="post">
    @csrf
      <div class="shipping-detail">
        <h1>Contact Us</h1>

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

        <div class="form-group">
          <select name="question" class="form-control">
            <option>Choose One Question</option>
            <option>Request to add for Beer-Producer</option>
            <option>Sales</option>
            <option>Purchase</option>
            <option>Product</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="first_name" placeholder="First-Name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="last_name" placeholder="Last-Name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="email" placeholder="E-mail" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="telephone" placeholder="Telephone" class="form-control" />
        </div>
        <div class="form-group">
          <textarea cols="30" rows="15" name="message" placeholder="Please, Write your request" class="form-control"></textarea>
        </div>
          <button type="submit" class="btn btn-success" >Submit</button>
      </div> 
    </form> 
  </div>
@endsection