@extends('layouts.layout')

@section('content')
  <div class="shipping">

    <table id="cart" class="table table-hover table-condensed">
      <thead>
      <tr>
          <th style="width:50%">Product</th>
          <th style="width:10%">Price</th>
          <th style="width:8%">Quantity</th>
          <th style="width:22%" class="text-center">Subtotal</th>
          <th style="width:10%"></th>
      </tr>
      </thead>
      <tbody>

      <?php $total = 0 ?>

      @if(session('cart'))
          @foreach(session('cart') as $id => $details)

              <?php $total += $details['price'] * $details['quantity'] ?>

              <tr>
                  <td data-th="Product">
                      <div class="row">
                          <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                          <div class="col-sm-9">
                              <h4 class="nomargin">{{ $details['name'] }}</h4>
                          </div>
                      </div>
                  </td>
                  <td data-th="Price">€{{ $details['price'] }}</td>
                  <td data-th="Quantity">{{ $details['quantity'] }}</td>
                  <td data-th="Subtotal" class="text-center">€{{ $details['price'] * $details['quantity'] }}</td>
                  <td class="actions" data-th="">
                      

                  </td>
              </tr>
          @endforeach
      @endif

      </tbody>
      <tfoot>
      <tr class="visible-xs">
          <td class="text-center"><strong>Total €{{ $total }}</strong></td>
      </tr>

      </tfoot>
  </table>
  <form action="{{ action('PaymentController@confirm')}}" method="post">
    @csrf



    

      
      <div class="shipping-detail">

 
        <h1>Ship To</h1>
        <div class="form-group">
          <input type="text" name="name" placeholder="Shipping name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="address" placeholder="Shipping Address" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="city" placeholder="Shipping City" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="state" placeholder="Shipping State" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="country" placeholder="Shipping Country" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="postcode" placeholder="Shipping Postcode" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="telephone" placeholder="Shipping Telephone" class="form-control" />
        </div>
          <button type="submit" class="btn btn-success"  >pay</button>
      </div> 
    </form> 
  </div>
@endsection