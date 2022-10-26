<?php

namespace App\Http\Controllers;

use App\Models\Accessoire;
use Illuminate\Http\Request;

class AccessoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Accessoire::latest()->paginate(5);

        return view('admin.accessoires.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accessoires.create');
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
            'accessoire_name'          =>  'required',
            'accessoire_price'         =>  'required',
            'accessoire_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $file_name = time() . '.' . request()->accessoire_image->getClientOriginalExtension();

        request()->accessoire_image->move(public_path('images'), $file_name);

        $accessoire = new Accessoire;

        $accessoire->accessoire_name = $request->accessoire_name;
        $accessoire->accessoire_price = $request->accessoire_price;
        $accessoire->accessoire_image = $file_name;

        $accessoire->save();

        return redirect()->route('accessoire.index')->with('success', 'accessoire Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function show(Accessoire $accessoire)
    {
        return view('admin.accessoires.show', compact('accessoire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessoire $accessoire)
    {
        return view('admin.accessoires.edit', compact('accessoire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessoire $accessoire)
    {
        $request->validate([
            'accessoire_name'      =>  'required',
            'accessoire_price'     =>  'required',
            'accessoire_image'     =>  'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $accessoire_image = $request->hidden_accessoire_image;

        if($request->accessoire_image != '')
        {
            $accessoire_image = time() . '.' . request()->accessoire_image->getClientOriginalExtension();

            request()->accessoire_image->move(public_path('images'), $accessoire_image);
        }

        $accessoire = Accessoire::find($request->hidden_id);

        $accessoire->accessoire_name = $request->accessoire_name;

        $accessoire->accessoire_price = $request->accessoire_price;

        $accessoire->accessoire_image = $accessoire_image;

        $accessoire->save();

        return redirect()->route('accessoire.index')->with('success', 'Accessoire Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessoire $accessoire)
    {
        $accessoire->delete();

        return redirect()->route('accessoire.index')->with('success', 'Accessoire Data deleted successfully');
    }
}
