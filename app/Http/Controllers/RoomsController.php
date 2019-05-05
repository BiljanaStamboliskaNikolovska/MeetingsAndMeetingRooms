<?php

namespace App\Http\Controllers;

use App\Room;
use App\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::where('is_active', '=', '1')->get();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Room::create(request()->validate([
            'name'=>['required', 'min:3'],
            'slug'=>['required', 'min:3'],
            'description'=>['required', 'min:3'],
            'available_seats'=>['required'],
            'is_active'=>['required'],
            'can_teleconference'=>['required'],
        ]));

        // $rooms= new Rooms;
        // $rooms->name=request('name');
        // $rooms->slug=request('slug');
        // $rooms->description=request('description');
        // $rooms->available_seats=request('available_seats');
        // $rooms->is_active=request('is_active');
        // $rooms->can_teleconference=request('can_teleconference');
            
        // $rooms->save();

        return redirect('/')->with('success', 'Room created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $rooms = Room::where('slug', '=', $slug)->first();
       
        return view('rooms.show', compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $rooms)
    {
        return view('rooms.edit', compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $room=Room::find($slug);

        $request->validate([
            'name'=>['required', 'min:3'],
            'slug'=>['required', 'min:3'],
            'description'=>['required', 'min:3'],
            'available_seats'=>['required'],
            'is_active'=>['required'],
            'can_teleconference'=>['required']
            ]);


        $room->name=request('name');
        $room->slug=request('slug');
        $room->description=request('description');
        $room->available_seats=request('available_seats');
        $room->is_active=request('is_active');
        $room->can_teleconference=request('can_teleconference');
            
        $room ->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $rooms)
    {
        $rooms->delete();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $rooms
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $room= Room::where('is_active', '=', '1')->first();
               
            $meetings = Meeting::where('meeting_room_id', '=', $room->id)->where('date_time_from', '>=', Carbon::now())->take(10)->get();
        
        return view('meetings.show', compact('room', 'meetings'));
    }
}
