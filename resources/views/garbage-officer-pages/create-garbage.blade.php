@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')

<form class="pt-5 px-4">
    <h2 class="pb-3">Create List Of Garbages</h2>
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Type</label>
    <select class="custom-select">
        <option selected>Pilih Jenis Sampah</option>
        <option value="1">Organik</option>
        <option value="2">Anorganik</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Price</label>
    <input type="text" class="form-control" id="exampleInputText" placeholder="Price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection