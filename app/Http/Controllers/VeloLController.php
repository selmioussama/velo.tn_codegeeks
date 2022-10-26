<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\veloL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VeloLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $velos= veloL::all();
        return view("LocationVelo.locationVelo",compact("velos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("LocationVelo.Velo.addVelo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $photo = null ;
        $userId = Auth::id();
        $validatedData = $request->validate([
            'type' => ['required' ],
            'photo' => ['required' ],
            'etat' => ['required'],
            'prix' => ['required' ],
            'addresse' => ['required'],
            'Date_debut' => ['required'],
            'Date_fin' => ['required','gte:Date_debut'],
            'Description' => ['required'],

        ]);
        if ($image = $request->file('photo')) {
            $destinationPath = 'velos/';
            $bicycletteImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $bicycletteImage );
            $photo = "$bicycletteImage ";
        }
        veloL::create(
            [
                "user_id" =>$userId,
                "type" => $request->type,
                "image" =>$photo,
                "etat" => $request->etat,
                "prix" => $request->prix,
                "addresse" => $request->addresse,
                "start_date" => $request->Date_debut,
                "end_date" => $request->Date_fin,
                "description" => $request->Description,
            ]
        );
        return redirect()->route('veloLs.index')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\veloL  $veloL
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $velo=veloL::findorFail($id);

        $user=User::where('id', $velo->user_id)->firstOrFail();

        return view("LocationVelo.Velo.moreinfo",compact("velo" , "user"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\veloL  $veloL
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $velo=veloL::findorFail($id);
        return view("LocationVelo.Velo.updateVelo",compact("velo"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\veloL  $veloL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $velo=veloL::findorFail($id);
        $velo->update([
            "type" => $request->type,
            "etat" => $request->etat,
            "prix" => $request->prix,
            "addresse" => $request->addresse,
            "start_date" => $request->Date_debut,
            "end_date" => $request->Date_fin,
            "description" => $request->Description,
        ]);
        return redirect()->route('veloLs.index')->with('success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\veloL  $veloL
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        veloL::findorFail($id)->delete();
        return redirect()->back();

    }
    public function getconnectedVelos(){
      $velos = DB::table('velo_l_s')->where('user_id', auth::id())->get();
        return view("LocationVelo.Velo.connectedVelos",compact("velos"));


    }
    public function LocationVeloAdmin(){
        $velos= veloL::all();

        return view("LocationVelo.Velo.adminLocationVelo",compact("velos"));
    }
}
