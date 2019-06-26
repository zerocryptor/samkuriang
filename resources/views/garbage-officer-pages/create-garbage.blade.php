@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')

<form class="pt-5 px-4"action="{{url('garbage_officer/')}}" method="post">
    <h2 class="pb-3">Create List Of Garbages</h2>
    {{csrf_field()}}
  <div class="form-group" >
    <label for="exampleInputName">Name</label>
    <input type="name" name="name"class="form-control" id="exampleInputName" placeholder="Masukkan Nama Sampah" >
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Type</label>
    <select name="type" class="form-control">
       <option>--</option>
        @foreach($type as $data)
        <option @if(old('type')==$data->type) selected @endif value="{{$data->type}}">{{$data->type}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Price</label>
    <input type="text" name="price" class="form-control" id="exampleInputText" placeholder="Harga">
    <small class="form-text text-muted">Harga sampah dalam satuan kilogram</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection