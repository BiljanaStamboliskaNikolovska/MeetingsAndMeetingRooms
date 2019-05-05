@extends('layout.master')

@section('title', 'Create a meeting')

@section('content')

<h3 class="mt-4 mb-2">Create a meeting</h3>

<form method="POST" action="/store">
  @csrf

  <div class="row mb-2">
    <div class="col-md-5">
      <h5 class=" media text-mutet pt-3" for="formGroupExampleInput">Name</h5>
      <h6 class="font-weight-normal alert alert-primary">{{$rooms->name}}</h6>
    </div>
    <!-- <div class="row mb-3">
        <div class="col-md-6">
            <h5 class=" media text-mutet pt-2 mb-3" for="formGroupExampleInput">Choose a room</h5>
            <select class="form-control d-none" id="formGroupExampleInput" name="meeting_room_id">
                
                <option value="{{$rooms->id}}">{{$rooms->slug}}</option>
                
            </select>
        </div>
    </div> -->
    <div class="col-md-5">
      <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Slug</h5>
      <h6 class="font-weight-normal alert alert-primary ">{{$rooms->slug}}</h6>
      <input type="text" class="form-control d-none" value="{{$rooms->id}}" id="formGroupExampleInput"
        placeholder="Company name" name="meeting_room_id">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-10">
      <h5 class=" media text-mutet pt-3 " for="formGroupExampleInput2">Description</h5>
      <h6 class="font-weight-normal alert alert-primary">{{$rooms->description}}</h6>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-4">
      <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Available seats</h5>
      <h6 class="font-weight-normal alert alert-primary">{{$rooms->available_seats}}</h6>
    </div>

    <div class="col-md-3">
      <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Active room</h5>
      <h6 class="font-weight-normal alert alert-primary">{{($rooms->is_active)?'Active room':'Room is not active'}}
      </h6>
    </div>
    <div class="col-md-3">
      <h5 class=" media text-mutet pt-3" for="formGroupExampleInput2">Teleconference</h5>
      <h6 class="font-weight-normal alert alert-primary">{{($rooms->can_teleconfetence)?"Available":"Unvaliable"}}
      </h6>
    </div>
  </div>


  <div class="row mb-2">
    <div class="col-md-5">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Scheduled by</h5>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Company name" name="scheduled_by">
    </div>

    <div class="col-md-5">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Meeting details</h5>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Meeting details"
        name="meeting_details">
    </div>

  </div>

  <div class="row mb-2">
    <div class="col-md-5">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Date from</h5>
      <input class="form-control" type="datetime-local" name="date_time_from">
    </div>
    <div class="col-md-5 mb-3">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Date to</h5>
      <input type="datetime-local" class="form-control" id="formGroupExampleInput2" name="date_time_to">
    </div>
  </div>

  <div class="row mb-3">
  <div class="col-md-10">
  @include('layout.errors')
  </div>
  </div>

  <div class="row mb-2">
  <div class="d-flex justify-content-end col-md-10">
  <button type="submit" class="btn btn-primary btn-lg">Save</button>
  </div>
  </div>
</form>





@endsection