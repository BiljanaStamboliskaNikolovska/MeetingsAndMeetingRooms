@extends('layout.master')

@section('title', 'Create rooms')

@section('content')
<h3 class="mt-4 mb-2">Create a room</h3>

<form method="post" action="/store">
  @csrf
  <div class="row mb-3">
    <div class="col-md-6">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Name</h5>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name"
        value="{{ old('name') }}">
    </div>
    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Slug</h5>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Slug" name="slug"
        value="{{ old('slug') }}">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-10">
      <h5 class=" media text-mutet pt-2" for="exampleFormControlTextarea1">Description</h5>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
        value="{{ old('description') }}" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-md-3">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Available seats</h5>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="10" name="available_seats"
        value="{{ old('available_seats') }}">
    </div>

    <div class="col-md-3">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Check if the room is active</h5>
      <div class="form-check form-check-inline ">
        <input class="form-check-input" type="radio" name="is_active" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">Active</label>
      </div>
      <div class="form-check form-check-inline  ">
        <input class="form-check-input" type="radio" name="is_active" id="inlineRadio2" value="0" checked>
        <label class="form-check-label" for="inlineRadio2">Not active</label>
      </div>
    </div>

    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Check if teleconference is available</h5>
      <div class="form-check form-check-inline ">
        <input class="form-check-input" type="radio" name="can_teleconference" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">Available</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="can_teleconference" id="inlineRadio2" value="0" checked>
        <label class="form-check-label" for="inlineRadio2">Unavailable</label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
  <div class="col-md-10">
  @include('layout.errors')
  </div>
  </div>


  <div class="row mb-3">
  <div class="d-flex justify-content-end col-md-10">
    <button type="submit" class="btn btn-primary btn-lg mt-3">Save</button>
  </div>
  </div>

  
</form>



@endsection