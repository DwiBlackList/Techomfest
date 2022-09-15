<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Peserta;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $teams = Teams::where('userid' , Auth::user()->id)->first();
   
        $datadiri = DataDiri::where('userid' , Auth::user()->id)->first();

        return view('dashboard' , compact('teams' , 'datadiri'));
    }
}
