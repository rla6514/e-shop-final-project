@extends('layouts.layout')

@section('content')

<h1>Beer-Producers</h1>

<div class="main-company">
@foreach($companies as $company)
    <div class="company-list">
        <a href="companies/{{ $company->id }}"><img src="{{ $company ->company_logo }}" /></a>
        <h2>{{ $company->company }}</h2>
        <a style="color: lightgreen" href="companies/{{ $company->id }}">more detail...</a>
    </div>
@endforeach
</div>

@endsection