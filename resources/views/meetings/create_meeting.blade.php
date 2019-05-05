@extends('layout.master')

@section('title', 'Create meeting')

@section('content')
<h3 class="mt-4 mb-4">Create a meeting</h3>

<form method="post" action="/meetings/store">
    @csrf
    <div class="row mb-2">
        <div class="col-md-8  alert alert-primary" role="alert">
            <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Choose a room for your meeting</h5>

            <select class="form-control" id="exampleFormControlSelect1" placeholder="Name" name="name">
           
            @foreach ($rooms as $room)
                <option>{{$room->name}}</option>  
                 @endforeach 
                <input type="text" class="form-control d-none" value="{{$room->id}}" id="formGroupExampleInput"
        placeholder="Company name" name="meeting_room_id">
               
            
            </select>
           
        </div>

    </div>
<div>
  <div class="row mb-2">
    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Scheduled by</h5>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Company name" name="scheduled_by">
    </div>
  
    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Meeting details</h5>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Meeting details"
        name="meeting_details">
    </div>
  </div>

  </div>

  <div class="row mb-2">
    <div class="col-md-4">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Date from</h5>
      <input class="form-control" type="datetime-local" name="date_time_from">
    </div>
  
    <div class="col-md-4 mb-3">
      <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">Date to</h5>
      <input type="datetime-local" class="form-control" id="formGroupExampleInput2" name="date_time_to">
    </div>
  </div>
    <div>

    <div class="row mb-3">
  <div class="col-md-8">
  @include('layout.errors')
  </div>
  </div>


  <div class="row mb-2">
  <div class="d-flex justify-content-end col-md-8">
  <button type="submit" class="btn btn-primary btn-lg">Save</button>
  </div>
  </div>

</div>
</form>



@endsection