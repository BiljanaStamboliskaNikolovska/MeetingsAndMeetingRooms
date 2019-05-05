<?php

namespace App\Http\Controllers;

use App\Meeting;
use App\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MeetingController extends Controller
{
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $rooms = Room::where('slug', '=', $slug)->first();
       
        return view('meetings.create', compact('rooms'));
    }

    public function createNew()
    {
        
        $rooms = Room::where('is_active', '=', 1)->get();

        

        return view('meetings.create_meeting', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Meeting $meeting)
    {
        
        Meeting::create(request()->validate([
           'meeting_room_id'=>['required', 'min:3'],
           'scheduled_by'=>['required', 'min:3'],
           'date_time_from'=>['required'],
           'date_time_to'=>['required'],
           'meeting_details'=>['required', 'min:3'],
        ]));
        
        // dd($request->all());
        // $meeting=new Meeting;

        // $meeting->meeting_room_id=request('meeting_room_id');
        // $meeting->scheduled_by=request('scheduled_by');
        // $meeting->date_time_from=request('date_time_from');
        // $meeting->date_time_to=request('date_time_to');
        // $meeting->meeting_details=request('meeting_details');

        // $meeting->save();

        return redirect('/');
    }    
}
