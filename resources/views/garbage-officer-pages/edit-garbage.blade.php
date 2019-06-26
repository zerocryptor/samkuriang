@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')

<form class="pt-5 px-4"action="{{url('garbage_officer/')}}" method="post">
  <h2 class="pb-3">Edit Garbages</h2>
  {{csrf_field()}}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputName"laceholder="Masukkan Nama Sampah" value="{{$garbage->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Type</label>
    <select name="category" class="form-control">
      <option>--</option>
      @foreach($type as $data)
      <option value="{{$data->id}}" @if($garbage->garbage_officer_id == $data->id) selected @endif>{{$data->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Price</label>
    <input type="text" name="price" class="form-control" id="exampleInputText" placeholder="Price"  value="{{$garbage->price}}" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection