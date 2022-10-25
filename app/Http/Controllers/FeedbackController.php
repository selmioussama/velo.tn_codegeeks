<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $listFeedbacks = \App\Models\Feedback::all();
        return view("admin/feedback/showfeedback", compact("listFeedbacks"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $listEvents = \App\Models\Event::all();
         $listFeedbacks = \App\Models\Feedback::all();
        return view("admin/feedback/ajoutfeedback" , compact("listEvents") , compact("listFeedbacks"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $event = \App\Models\Event::findOrFail($request->event_id);
      $feedback = new \App\Models\Feedback;
      $feedback->description = $request->description;
      $event->feedbacks()->save($feedback);
       return redirect()->route('feedback.create');

    }
    /**

     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = \App\Models\Feedback::find($id);
                return view("admin/feedback/editfeedback", compact("feedback"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $Feedback = \App\Models\Feedback::find($id);
              $Feedback::where('id' , $id)->update($request->all());
              return redirect()->route('feedback.create') ->with('success','Feedback updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = \App\Models\Feedback::find($id);
                $feedback->delete();
                return redirect()->route('feedback.create') ->with('success','Feedback deleted successfully.');;
    }
}
