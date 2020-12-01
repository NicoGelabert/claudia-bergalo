<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class WorkController extends Controller
{
    public function index(){
        $trabajos = Work::where('location', '=', 'imperdibles')->get();
        $trabajos2 = Work::where('location', '=', 'ultimos')->get();
        $trabajos3 = Work::where('location', '=', 'mezcladito')->get();
        $trabajos4 = Work::where('location', '=', 'demo')->get();
        $trabajos5 = Work::where('location', '=', 'para-ver-y-escuchar')->get();
        $trabajos6 = Work::where('location', '=', 'audiolibros')->get();
        return view('works.workslist')->with('trabajos', $trabajos)->with('trabajos2', $trabajos2)->with('trabajos3', $trabajos3)->with('trabajos4', $trabajos4)->with('trabajos5', $trabajos5)->with('trabajos6', $trabajos6);
    }
}
