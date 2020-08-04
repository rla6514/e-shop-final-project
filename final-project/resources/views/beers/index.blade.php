@extends('layouts.layout')
{{-- @extends('layouts.app') --}}

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}




<h1>Beers</h1>

<div class="main">
@foreach($beers as $beer)
    <div class="beer-list">
        <a href="beers/{{ $beer->id }}"><img src="{{ $beer->image }}" class="img-fluid" alt="Responsive image" /></a>
        <h2>{{ $beer->product_name }}</h2>
        <p>Company: {{ $beer->company_name }}</p>

        <a style="color: lightgreen" href="beers/{{ $beer->id }}">more detail...</a>
    </div>
@endforeach


</div>
{{ $beers->links()}}

@endsection