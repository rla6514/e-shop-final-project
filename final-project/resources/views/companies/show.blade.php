
@extends('layouts.layout')

@section('content')

<div class="detail-company">
  <div class="detail-companies">
  <div class="detail-company_1">
  <h1>{{ $company->company }}</h1>
  <img src="{{ $company->company_logo }}">
</div>
<div class="detail-company_2">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"><h4 id="description-company"> {{ $company->company_description }}</h4></th>
  
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><strong><h4>Email address:</strong> {{ $company->company_email }}</h4></th>
  
      </tr>
      <tr>
        <th scope="row"><strong><h4>Number:</strong> +{{ $company->company_number }}</h4></th>
  
      </tr>
      <tr>
        <th scope="row"><strong><h4>Address:</strong> {{ $company->company_address }}</h4></th>
  
      </tr>
    </tbody>
  </table>
</div>

</div>
</div>

@endsection


