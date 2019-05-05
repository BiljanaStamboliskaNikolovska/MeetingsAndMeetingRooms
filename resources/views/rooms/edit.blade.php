@extends('layout.master')

@section('title', 'Edit rooms')

@section('content')
<h3 class="mt-4 mb-2">Edit meeting rooms</h3>

<form method="post" action="/{{$rooms->id}}/update">
  @method('patch')
  @csrf

  <div class="row mb-3">
    <div class="col-md-6">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Name</h5>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name"
        value="{{$rooms->name }}">
    </div>
    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Slug</h5>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Slug" name="slug"
        value="{{$rooms->slug }}">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-10">
      <h5 class=" media text-mutet pt-2" for="exampleFormControlTextarea1">Description</h5>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
        name="description">{{$rooms->description }}</textarea>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-md-3">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Available sits</h5>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="10" name="available_seats"
        value="{{$rooms->available_seats }}">
    </div>




    <div class="col-md-3">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Check if the room is active</h5>
      <div class="form-check form-check-inline ">
        <input class="form-check-input " type="radio" name="is_active" id="inlineRadio1" value="1"
          {{($rooms->is_active==1)?'checked':''}}>
        <label class="form-check-label" for="inlineRadio1">Active</label>
      </div>

      <div class="form-check form-check-inline  ">
        <input class="form-check-input " type="radio" name="is_active" id="inlineRadio2" value="0"
          {{($rooms->is_active==0)?'checked':''}}>
        <label class="form-check-label" for="inlineRadio2">Not active</label>
      </div>
    </div>

    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput2">Check if teleconference is available</h5>
      <div class="form-check form-check-inline ">
        <input class="form-check-input" type="radio" name="can_teleconference" id="inlineRadio1" value="1"
          {{($rooms->can_teleconference==1)?'checked':''}}>
        <label class="form-check-label" for="inlineRadio1">Available</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="can_teleconference" id="inlineRadio2" value="0"
          {{($rooms->can_teleconference==0)?'checked':''}}>
        <label class="form-check-label" for="inlineRadio2">Unavailable</label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
  <div class="col-md-10">
  @include('layout.errors')
  </div>
  </div>

  <div class="row mb-4">
  <div class="d-flex justify-content-end col-md-9">
  <button type="submit" class="btn btn-primary btn-lg">Save</button>
  </div>
 

</form>
<form method="POST" action="/{{$rooms->id}}/delete">
  @method('DELETE')
  @csrf
  <button type="sumit" class="btn btn-primary btn-lg">Delete</button>
</form>
</div>
</div>
@endsection