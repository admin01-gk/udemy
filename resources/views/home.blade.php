@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel 7 Home Page</title>
      <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-md-12 mt-5 text-center">
                        <h1> Product List</h1>
                        <a class="btn btn-success mt-1" href="{{Route ('product.index') }}">Create New Product</a>
                  </div>
                  
            </div>
      </div>
</body>
</html>
@endsection
