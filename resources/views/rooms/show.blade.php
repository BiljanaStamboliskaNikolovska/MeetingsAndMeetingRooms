@extends('layout.master')

@section('title', 'Show rooms')

@section('content')

<h3 class="mt-4">Rooms card</h3>
<div class="row mb-3">
  <div class="col-md-5">
    <h5 class=" media text-mutet pt-3" for="formGroupExampleInput">Name</h5>
    <h6 class="font-weight-normal alert alert-primary">{{$rooms->name}}</h6>
  </div>
  <div class="col-md-4">
    <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Slug</h5>
    <h6 class="font-weight-normal alert alert-primary ">{{$rooms->slug}}</h6>
  </div>
</div>

<div class="row mb-3">
  <div class="col-md-9">
    <h5 class=" media text-mutet pt-3 " for="formGroupExampleInput2">Description</h5>
    <h6 class="font-weight-normal alert alert-primary">{{$rooms->description}}</h6>
  </div>
</div>

<div class="row mb-3">
  <div class="col-md-3">
    <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Available seats</h5>
    <h6 class="font-weight-normal alert alert-primary">{{$rooms->available_seats}}</h6>
  </div>

  <div class="col-md-3">
    <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Active room</h5>
    <h6 class="font-weight-normal alert alert-primary">{{($rooms->is_active)?'Active room':'Room is not active'}}</h6>
  </div>
  <div class="col-md-3">
    <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Teleconference</h5>
    <h6 class="font-weight-normal alert alert-primary">{{($rooms->can_teleconference)?'Available':'Unvaliable'}}</h6>
  </div>
</div>

<div class="row mt-4">
  <form class="mr-3" method="get" action="/{{$rooms->id}}/edit">
    @csrf
    <button type="submit" class="btn btn-primary btn-lg mr-3 ml-3">Edit room</button>
  </form>
  <form class="mr-3" method="get" action="/{{$rooms->slug}}/create">
    @csrf
    <button type="submit" class="btn btn-primary btn-lg mr-3 ml-3">Create a meeting</button>
  </form>
  <form method="get" action="/">
    @csrf
    <button type="submit" class="btn btn-primary btn-lg">Back</button>


  </form>
</div>

@endsection