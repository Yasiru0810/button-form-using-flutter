@extends('customer.layout')

@section('content')
<div class="form-group row">
   <div class="col-lg-12 margin-tb">
      <div class="float-left">
      <h2>Edit Recored</h2>
      </div>
</div>
@if($customer)
<form action="{{route('Customer.update',$customer->id)}}" method="POST">
@csrf

@method('PUT')
<div class="row">
    <div class="col-md-12">
       <div class="form-group">
         <strong>name:</strong>
         <input type="text" class="form-control" value="{{$customer->name}}" place holder="enter the name" name="name">
        </div>
    </div>    
    <div class="col-md-12">
       <div class="form-group">
         <strong>address:</strong>
         <input type="text" class="form-control" value="{{$customer->address}}" place holder="enter the contact" name="address">
        </div>
    </div>  
    <div class="col-md-12">
       <div class="form-group">
         <strong>contact:</strong>
         <input type="text" class="form-control" value="{{$customer->contact}}" place holder="enter the address" name="contact">
        </div>
    </div>  
    <div class="col-md-12">
       <div class="form-group">
         <button type="submit" class="btn btn-primary">Ok</button> 
         <a class="btn  btn-primary" href="{{route('Customer.index')}}">Back</a>
        </div>
    </div>  
    </div>   
  </div>

</form>
@endif
@endsection