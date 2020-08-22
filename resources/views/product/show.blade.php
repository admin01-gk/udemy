@extends('product.layout')


@section('content')
<div class="row">
      <div class="col-md-12 mt-5 ">
            <div class="float-left ">
                  <h2 >Show Product</h2>
            </div>
            <div class="float-right ">
                  <a class="btn btn-success btn-sm" href="{{Route ('product.index') }}">Back</a>
            </div>
      </div>

      <div class="row " >
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                  <div class="form-group mt-3 ">
                        <strong >Product Name : </strong>
                        {{ $data->product_name }}
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                  <div class="form-group mt-3 ">
                        <strong >Product Code : </strong>
                        {{ $data->product_code }}
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                  <div class="form-group mt-3 ">
                        <strong >Details : </strong>
                        {{ $data->details }}
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                  <div class="form-group mt-3 ">
                        <strong > Product Images : </strong>
                        <img class="h-25 w-25" src="{{ URL::to($data->logo) }}" >
                  </div>
            </div>
      </div>
</div>




@endsection
