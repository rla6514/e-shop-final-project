<div class="home-header" >
  <div class="logo" >


<body>
  <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
          <div class="header-container">
              <div class="logo-header" >
                  <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                    <a href="/"><img id="logo-image" src="/images/logo1.jpg" /></a>

                    <a class="" href="{{ url('/') }}">Home</a>

                    <a href="{{ route('beers.index') }}">Beers</a>
                
                    <a href="{{ route('companies.index') }}">Beer-Producers</a>

                    <a href="{{ url('/contact') }}">Contact</a>

                    <form class="form-inline my-2 my-lg-0" action="/" method="POST" role="search" style="margin-right: 20px">
                        {{ csrf_field() }}
                        <input class="form-control mr-sm-2 searchbar" type="search" placeholder="Search your beer" aria-label="Search" name="q"
                        placeholder="Search beer name">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    

                    
                </ul>
             
                
            </div>
            


            

            <div class="login-header">

                <div class="cart-container form-inline my-2 my-lg-0">

                    <div class="dropdown">
                        <button type="button" class="btn btn-info" data-toggle="dropdown" style="margin-right: 20px">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array)session('cart')) }}</span>
                        </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6 cart-show">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array)session('cart')) }}</span>
                            </div>
    
                            
    
                            <?php //session()->flush();?>
                            <?php //dd(session('cart')); ?>
                            
                            <?php $total = 0 ?>
                            @foreach((array)session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                            @endforeach
    
                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">€ {{ $total }}</span></p>
                            </div>
                        </div>
                        
    
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-2 col-sm-2 col-2 cart-detail-img">
                                        <img src="{{ $details['photo'] }}" width="300" />
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-product color-quantity">
                                        <p>{{ $details['name'] }}</p>
                                        <span class="price text-info ">€ {{ $details['price'] }}</span> <span class="count color-quantity"> Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
    
                        
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>

                
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                      <div>
                          <li class="nav-item">
                              <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                        </div>
                          @if (Route::has('register'))
                          <div>
                              <li class="nav-item">
                                  <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                            </div>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" style="color: white"   class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item"  href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
            </div>
          </div>
      </nav>

      <main class="py-4">
          {{-- @include('partials.header') --}}
          {{-- @yield('content') --}}
      </main>
  </div>
</body>

