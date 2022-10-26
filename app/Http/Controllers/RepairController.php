<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Repair::latest()->paginate(5);

        return view('admin.repairs.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.repairs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname'          =>  'required',
            'user_email'         =>  'required|email|unique:repairs',
            'repair_date'  =>    'required',
            'cost'  =>                'required'
           
        ]);

       

        $repair = new Repair();

        $repair->fullname = $request->fullname;
        $repair->user_email = $request->user_email;
        $repair->repair_date = $request->repair_date;
        $repair->cost =  $request->cost;

        $repair->save();

        return redirect()->route('repairs.index')->with('success', 'Repair Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        return view('admin.repairs.show', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        return view('admin.repairs.edit', compact('repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
    {
        $request->validate([
            'fullname'          =>  'required',
            'user_email'         =>  'required|email|unique:repairs',
            'repair_date'  =>'required'
        ,
        'cost'  =>'required'
           
        ]);

        

      
        $repair = Repair::find($request->hidden_id);

        $repair->fullname = $request->fullname;

        $repair->user_email = $request->user_email;

        $repair->repair_date = $request->repair_date;
        
        $repair->cost = $request->cost;

      

        $repair->save();

        return redirect()->route('repairs.index')->with('success', 'Reparation Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        $repair->delete();

        return redirect()->route('repairs.index')->with('success', 'reparation Data deleted successfully');
    
    }
}
