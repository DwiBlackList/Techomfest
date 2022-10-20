<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Peserta;
use App\Models\smulmed;
use App\Models\ssoftware;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class HomeController extends Controller
{   
    public function index()
    {
        // data user side
        $teams = Teams::where('userid' , Auth::user()->id)->first();
   
        $datadiri = DataDiri::where('userid' , Auth::user()->id)->get();

        if (Auth::user()->kategori == 'NULL') {
            $subsmission = 'tdkada';
        }elseif (Auth::user()->kategori == 'Software') {
            $subsmission = ssoftware::where('idteam' , $teams->id)->get();
        }elseif (Auth::user()->kategori == 'Multimedia') {
            $subsmission = smulmed::where('idteam' , $teams->id)->get();
        }elseif (Auth::user()->kategori == 'Network') {
            // $subsmission = smulmed::where('idteam' , $teams)->get();
        }

        // data admin side
        $datadiriverif = DataDiri::where('status' , 'Verified')->get();

        foreach ($datadiriverif as $x) {
            $team = Teams::where('userid' , $x->userid)->get();
            foreach ($team as $y) {
                $peserta = Peserta::where('idteam' , $y->id)->get();
                print_r($peserta->id);
            }
        }
        

        // return view('dashboard' , compact('teams' , 'datadiri' , 'subsmission'));
    }
}
