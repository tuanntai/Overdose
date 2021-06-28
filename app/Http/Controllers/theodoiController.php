<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theodoi;

class theodoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $theodois = theodoi::all();
        
        return view('theodoi.list', compact('theodois'));
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
    public function store(Request $request)
    {
        $theodoi =new theodoi();
        $theodoi->hoten = $request->hoten;
        $theodoi->sdt = $request->sdt;
        $theodoi->save();
        return redirect(route('index'));
    }

    
    
}
