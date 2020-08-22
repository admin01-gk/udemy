@extends('product.layout')


@section('content')
<div class="row">
            
      <div class="col-lg-12 mt-5 ">
            @if ($message = Session::get('success')) 
            <div class="alert alert-success text-center">
                 <div class="row">
                       <div class="col-md-12">
                        <p>{{ $message }}</p>
                       </div>
                 </div>
            </div>
            
            @endif
            <div class="float-left">
                  <h2>Laravel Product List</h2>
            </div>
            <div class="float-right ">
                  <a class="btn btn-success btn-sm" href="{{Route ('create.product') }}">Create New Product</a>
            </div>
         
            <table class="table table-bordered text-center" >
                  <tr class="">
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Details</th>
                        <th>Product Logo</th>
                        <th>Action</th>
                  </tr>
                  @foreach($product as $pro)
                  <tr >
                        
                        <td>{{ $pro->product_name }}</td>
                        <td>{{ $pro->product_code }}</td>
                        <td>{{ $pro->details }}</td>
                        <td> <img  src="{{ URL::to($pro->logo) }}" style="height: 70px;" width="80px;"> </td>
                        <td >
                              <a class="btn btn-primary btn-sm mr-2" href="{{ URL::to('show/product/'.$pro->id) }}">Show</a>
                              <a class="btn btn-warning btn-sm mr-2" href="{{ URL::to('edit/product/'.$pro->id) }}">Edit</a>
                              <a class="btn btn-danger btn-sm" href="{{ URL::to('delete/product/'.$pro->id) }}" onclick="return confirm('Are You Sure Delete ')">Delete</a>
                        </td>
                  </tr>
                  @endforeach
            </table>
            {!! $product->links() !!}
      </div>
</div>


@endsection