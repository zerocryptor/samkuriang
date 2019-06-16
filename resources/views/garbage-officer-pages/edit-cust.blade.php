@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')

<form class="pt-5 px-4">
    <h2 class="pb-3">Edit Customer</h2>
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Garbage Savings</label>
    <input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter number">
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Price</label>
    <input type="number" class="form-control" id="exampleInputNumber" placeholder="Price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection