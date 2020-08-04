@extends('layouts.layout')

@section('content')

<!-- === 🔲 SquareStudio Age Verification Plugin 🔲 === -->
<div id="age-verif">
  <div id="age-pop">
    <h2>Are you over 18?</h2>
    <p id="age-yes" style="color: black">Yes</p>
    <p id="age-no" style="color: black">No</p>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<style>
#age-verif{opacity:0;pointer-events:none;position:fixed;top:0;bottom:0;left:0;right:0;z-index:9000;background-color:rgba(219,218,218,.95);transition:visibility 0s ease-in-out .5s,opacity .5s ease-in-out}.ageUnconfirmed{pointer-events:auto!important;opacity:1!important}@media (max-width:768px){#age-pop{width:90vw!important}}#age-pop{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);background-color:#65839b;text-align:center;padding:50px 40px;width:30vw;height:auto;box-sizing:border-box}#age-pop p{cursor:pointer;background-color:#fff;color:#ooo;padding:15px 30px;margin-top:20px;text-transform:uppercase;letter-spacing:2px;font-weight:600;font-size:12px;display:inline-block;outline:0}
</style>
<script>$(document).ready(function(){if(localStorage.getItem("ageverified")=='true'){}else{$('#age-verif').addClass('ageUnconfirmed')}});</script><script>$(document).ready(function(){$('#age-yes').click(function(){localStorage.setItem('ageverified','true');$('#age-verif').removeClass('ageUnconfirmed')})});</script><script>$(document).ready(function(){$('#age-no').click(function(){$(location).attr('href','https://google.com')})});</script>
<!-- === 🔲 SquareStudio Age Verification Plugin 🔲 === -->

  <script src="https://js.stripe.com/v3/"></script>

  <div class="container">
    <div class="search">
      @if(isset($details))
      <p> The Search results for your query <b> {{ $query }} </b> are :</p>
      <h2>Sample Beer details</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Company Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($details as $beer)
          <tr>
            <td><a href="beers/{{ $beer->id }}">{{$beer->product_name}}</a></td>
            <td>{{$beer->company_name}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @elseif(isset($message))
      <p>{{ $message }}</p>
      @endif
    </div>

    @if (Session::has('success'))
    
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>

@endif
  </div>

    <div class="new-container">
        <h1>New Beers</h1>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="/beers/42"><img id="main-image" src="https://www.hbrebel.cz/photos/texty/p/0/151.png" alt="Los Angeles" ></a>
                <h4><strong>REBEL</strong></h4>
              </div>
              <div class="carousel-item">
                <a href="/beers/41"><img id="main-image" src="https://www.hbrebel.cz/photos/texty/p/0/150.png" alt="Chicago" ></a>
                <h4><strong>REBEL 0.0</strong></h4>
              </div>
              <div class="carousel-item">
                <a href="/beers/40"><img id="main-image" src="https://www.hbrebel.cz/photos/texty/p/0/149.png" alt="New York" ></a>
                <h4><strong>REBEL XI</strong></h4>
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
    </div>


    <div class="new-container" >
        <h1>New Beer Producers</h1>
        <div id="demo1" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo1" data-slide-to="0" class="active"></li>
            <li data-target="#demo1" data-slide-to="1"></li>
            <li data-target="#demo1" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="/companies/1"><img id="main-image" src="https://www.bernard.cz/img/u/logo-bernard-large-v02.png" alt="Los Angeles" ></a>
              <h4><strong>Bernard pivo</strong></h4>
            </div>
            <div class="carousel-item">
              <a href="/companies/2"><img id="main-image" src="https://pivovarcernahora.cz/wp-content/uploads/2020/04/Logo_CH_upravy_2016.png" alt="Chicago" ></a>
              <h4><strong>Pivovar Černá Hora</strong></h4>
            </div>
            <div class="carousel-item">
              <a href="/companies/3"><img id="main-image" src="https://www.hbrebel.cz/img/logo_rebel.png" alt="New York" ></a>
              <h4><strong>Měšťanský pivovar Havlíčkův Brod</strong></h4>
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    </div>

@endsection









