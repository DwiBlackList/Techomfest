<?php

namespace App\Http\Controllers;

use App\Models\smulmed;
use App\Models\ssoftware;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubsmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexmulmed()
    {
        $teams = Teams::where('userid' , Auth::user()->id)->first();
        return view('submission.mulmed' , compact('teams'));
    }

    public function indexsoftware()
    {
        $teams = Teams::where('userid' , Auth::user()->id)->first();
        return view('submission.software' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemulmed(Request $request)
    {
        // dd($request);
        $tujuan_upload = 'SubsmissionMultiMedia';
        
        $lorisinil = $request->lorisinil;
        $lokasi_lorisinil = time()."-".$lorisinil->getClientOriginalName();
		$lorisinil->move($tujuan_upload,$lokasi_lorisinil);
        
        $ldeskripsi = $request->ldeskripsi;
        $lokasi_ldeskripsi = time()."-".$ldeskripsi->getClientOriginalName();
		$ldeskripsi->move($tujuan_upload,$lokasi_ldeskripsi);
        
        $hasilkaryalomba = $request->hasilkaryalomba;
        $lokasi_hasilkaryalomba = time()."-".$hasilkaryalomba->getClientOriginalName();
		$hasilkaryalomba->move($tujuan_upload,$lokasi_hasilkaryalomba);

        $mulmed = new smulmed();
        $mulmed->idteam = $request->idteam;
        $mulmed->lorisinil = $lokasi_lorisinil;
        $mulmed->ldeskripsi = $lokasi_ldeskripsi;
        $mulmed->hasilkaryalomba = $lokasi_hasilkaryalomba;
        $mulmed->save();

        return redirect(Route('dashboard'));
    }

    public function storesoftware(Request $request)
    {
        $software = new ssoftware();
        $software->idteam = $request->idteam;
        $software->linkgd = $request->linkdrive;
        $software->save();

        return redirect(Route('dashboard'));
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
        //
    }
}
