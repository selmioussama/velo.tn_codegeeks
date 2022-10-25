<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listEvents = \App\Models\Event::all();
        //dd($listEvents);
        return view("admin/event/showevent", compact("listEvents"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/event/ajoutevent");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $event = new \App\Models\Event;
          $event->title = $request->title;
          $event->description = $request->description;
          $event->place= $request->place;
          $event->start_date = $request->start_date;
          $event->end_date = $request->end_date;
          $event->save();
          return redirect()->route('event.showevent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
             $listEvents = \App\Models\Event::all();
             return view("admin/event/eventsfrontoffice", compact("listEvents"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = \App\Models\Event::find($id);
        return view("admin/event/editevent", compact("event"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  $Event = \App\Models\Event::find($id);
       $Event::where('id' , $id)->update($request->all());
       return redirect()->route('event.showevent') ->with('success','Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = \App\Models\Event::find($id);
        $event->delete();
        return redirect()->route('event.showevent') ->with('success','Event deleted successfully.');;
    }
}
