@extends('layouts/layout')

@section('title', 'Cart')

@section('content')

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

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
                    <td data-th="Quantity">
                        <input type="number" id="item{{ $id }}" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">€{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        
                        <button class="btn btn-info btn-sm update-cart" onClick="update({{ $id }})"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" onClick="remove({{ $id }})"><i class="fa fa-trash-o"></i></button>
                        
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total €{{ $total }}</strong></td>
            <td>    
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
                
                
                
                <a  href="{{ url('/checkout') }}" class="btn btn-success"> Go to checkout</a>
                
                @endauth
                
                @guest
                
                
                    <a class="btn btn-warning" href="{{ route('login') }}">Login to Checkout</a>
                
                
                @endguest</td>
        </tr>
        </tfoot>
    </table>


@endsection


@section('scripts')


    <script type="text/javascript">

    function update(item) {
        let id_quantity = 'item'.concat(item)
           
          
           let quantity = document.getElementById(id_quantity).value;

           
           

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: item, quantity: quantity},
               success: function (response) {
                   window.location.reload();
               }
            });
        };

    function remove(item) {
        

       

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: item},
                success: function (response) {
                    window.location.reload();
                }
            });
        };
    };







    </script>

@endsection