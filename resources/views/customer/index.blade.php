@extends('customer.layout')

@section('content')
<div class="form-group row">
   <div class="col-lg-12 margin-tb">
      <div class="float-left">
      <h2>Recoreds All Customers</h2>
      <a class="btn btn-success" href="{{route('Customer.create')}}">Add</a>
      </div>
</div>

<!-- @if($msg = Session::get('add'))
  <div class = "alert alert-success">
    <p>{{$msg}}</p>
  </div> 
@endif -->

<table class="table table-bordered">
  <tr>
    <th>Id</th> 
    <th>Name</th>
    <th>Address</th>
    <th>Contact</th>
    <!-- <th>Action</th> -->
   </tr>
    @foreach ($customer as $data) 
   <tr>

     <td>{{$data->id}}</td>
     <td>{{$data->name}}</td>
     <td>{{$data->address}}</td>
     <td>{{$data->contact}}</td>
     <td>
       
       <form action="{{route('Customer.destroy',$data->id)}}"method="POST">
       <a class="btn btn-primary" href="{{route('Customer.edit',$data->id)}}">Edit</a>
       @csrf  
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Delete</a>
      </form>
     </td>
    @endforeach
   </tr>
</table>
@endsection