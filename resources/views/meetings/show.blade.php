@extends('layout.master')

@section('title', 'Preview meeting')

@section('content')
<h3 class="mt-5">Preview meeting rooms</h3>
<div class="row mb-4">
  <div class="col-md-8  alert alert-primary" role="alert"">
    <h5 class=" media text-mutet pt-2" for="formGroupExampleInput">List of meeting for active rooms</h5>
    <div> {{$room->name}}</div>
      @if (!(count($meetings)))

      <p>No scheduled meetings.</p>

      @else
        @foreach ($meetings as $meeting)
          <div> Start time: {{$meeting->date_time_from}}</div>
          <div> End time: {{$meeting->date_time_to}}</div>
        @endforeach
      @endif
    </div>
  </div>
  @endsection