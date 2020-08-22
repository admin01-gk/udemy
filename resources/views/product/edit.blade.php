@extends('product.layout')


@section('content')
      <div class="row">
            <div class="col-md-12 mt-5 ">
                  <div class="float-left ">
                        <h2 >Edit Product</h2>
                  </div>
                  <div class="float-right ">
                        <a class="btn btn-success btn-sm" href="{{Route ('product.index') }}">Back</a>
                  </div>
            </div>
      </div>

      <form class="mt-5" action="{{ URL('update/product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
      <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group ">
                        <strong>Product Name :</strong>
                        <input class="form-control mt-2" type="text " name="product_name" value="{{ $product->product_name }}" required >
                  </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                        <strong>Product Code<Code></Code> :</strong>
                        <input class="form-control mt-2" type="text " name="product_code" value="{{ $product->product_code }}" required >
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                        <strong >Details :</strong>
                        <textarea class="form-control mt-2" name="details"  cols="74" rows="5" placeholder="Details">{{ $product->details }}</textarea>
                  </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                        <strong >Product Images :</strong>
                        <input class="form-control mt-2" type="file" name="logo">     
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                        <strong >Product Old Images :</strong>
                        <img  src="{{ URL::to($product->logo) }}" style="height: 70px;" width="80px;">   
                        <input type="hidden" name="old_logo" value="{{ $product->logo }}">  
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <button class="btn btn-primary btn-sm mt-2" type="submit">Apply</button>
            </div>

      </div>
      
      
      
      
      
      
      </form>





@endsection