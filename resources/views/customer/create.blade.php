@extends('customer.layout')

@section('content')
<div class="form-group row">
   <div class="col-lg-12 margin-tb">
      <div class="float-left">
      <h2>Create a New Recored</h2>
      <a class="btn btn-primary" href="">Add</a>
      </div>
</div>

<form action="{{route('Customer.store')}}" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
       <div class="form-group">
         <strong>name:</strong>
         <input type="text" class="form-control" place holder="enter the name" name="name">
        </div>
    </div>    
    <div class="col-md-12">
       <div class="form-group">
         <strong>address:</strong>
         <input type="text" class="form-control" place holder="enter the contact" name="address">
        </div>
    </div>  
    <div class="col-md-12">
       <div class="form-group">
         <strong>contact:</strong>
         <input type="text" class="form-control" place holder="enter the address" name="contact">
        </div>
    </div>  
    <div class="col-md-12">
       <div class="form-group">
         <button type="submit" class="btn btn-primary">Submit</button> 
         <a class="btn  btn-primary" href="{{route('Customer.index')}}">Back</a>
        </div>
    </div>  
    </div>   
  </div>

</form>

@endsection