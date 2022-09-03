<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $teams = DB::table('teams')
        //             ->where('userid', '=', Auth::user()->id)
        //             ->first();
        $teams = Teams::where('userid' , Auth::user()->id)->first();

        $teamsearch = DB::table('teams')
                    ->where('userid', '=', Auth::user()->id)
                    ->pluck('id');
        $array = array("[" , "]");
        $teamid = str_replace($array , "" , $teamsearch);
        $peserta = Peserta::where('idteam' , $teamid)->get();

        return view('teams.index' , compact('teams' , 'peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teams = new Teams;
        $teams->namateam = $request->namateam;
        $teams->userid = Auth::user()->id;
        $teams->save();

        $teamsearch = DB::table('teams')
                    ->where('userid', '=', Auth::user()->id)
                    ->pluck('id');
        $array = array("[" , "]");
        $teamid = str_replace($array , "" , $teamsearch);

        $peserta1 = new Peserta;
        $peserta1->namapeserta = $request->peserta1;
        $peserta1->idteam = $teamid;
        $peserta1->save();


        $peserta2 = new Peserta;
        $peserta2->namapeserta = $request->peserta2;
        $peserta2->idteam = $teamid;
        $peserta2->save();

        $peserta3 = new Peserta;
        $peserta3->namapeserta = $request->peserta3;
        $peserta3->idteam = $teamid;
        $peserta3->save();

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['kategori' => $request->kategori]);
        
        return redirect(Route('TeamsIndex'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('peserta')->where('idteam', '=', $id)->delete();

        DB::table('teams')->where('id', '=', $id)->delete();

        return redirect(route('TeamsIndex'));
    }
}
