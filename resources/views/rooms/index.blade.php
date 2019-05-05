@extends('layout.master')

@section('title', 'Meeting Rooms')

@section('content')
<h3 class="mt-5">Active meeting rooms</h3>

@foreach ($rooms as $room)
<ol class="mt-3 list-unstyled ml-5">

    <li><a href="/{{$room->slug}}/show">{{$room->name}}</a> - {{$room->slug}}</li>

</ol>
@endforeach

@endsection