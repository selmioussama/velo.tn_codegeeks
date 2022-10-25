<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Association::latest()->paginate(5);

        return view('admin.associations.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.associations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'association_name'          =>  'required',
            'association_number_of_employees'   => 'required',
            'association_type'  => 'required',
            'association_email'         =>  'required|email|unique:associations',
            'association_logo'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        $file_name = time() . '.' . request()->association_logo->getClientOriginalExtension();

        request()->association_logo->move(public_path('images'), $file_name);

        $association = new Association;

        $association->association_name = $request->association_name;
        $association->association_number_of_employees = $request->association_number_of_employees;
        $association->association_email = $request->association_email;
        $association->association_type = $request->association_type;
        $association->association_logo = $file_name;

        $association->save();

        return redirect()->route('associations.index')->with('success', 'Associations Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        //
        return view('admin.associations.show', compact('association'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        //
        return view('admin.associations.edit', compact('association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        //
        $request->validate([
            'association_name'          =>  'required',
            'association_number_of_employees'   => 'required',
            'association_type'  => 'required',
            'association_email'         =>  'required|email',
            'association_logo'         =>  'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $association_logo = $request->hidden_association_logo;

        if($request->association_logo != '')
        {
            $association_logo = time() . '.' . request()->association_logo->getClientOriginalExtension();

            request()->association_logo->move(public_path('images'), $association_logo);
        }

        $association = Association::find($request->hidden_id);

        $association->association_name = $request->association_name;

        $association->association_number_of_employees = $request->association_number_of_employees;

        $association->association_email = $request->association_email;

        $association->association_type = $request->association_type;

        $association->association_logo = $association_logo;

        $association->save();

        return redirect()->route('associations.index')->with('success', 'Association Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        //
         $association->delete();

        return redirect()->route('associations.index')->with('success', 'Association Data deleted successfully');
    }
}
