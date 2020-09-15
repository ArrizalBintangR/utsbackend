<?php

namespace App\Http\Controllers;

use App\Models\Volume;
use Illuminate\Http\Request;

class VolumeController extends Controller
{

    public function Volume(Request $request){
        
        $phi = 3.14;
        $jarijari = $request->input('r');
        $tinggi = $request->input('t');
        $opsi = $request->input('opsi');
        $hasil = 0.0;

        switch ($opsi) {
            case 'tabung':
                $hasil = $phi * $jarijari * $jarijari * $tinggi;
                break;
            case 'bola':
                $hasil = 4/3 * $phi * $jarijari * $jarijari * $jarijari; 
                break;
            case 'kerucut':
                $hasil = 1 / 3 * $phi * $jarijari * $jarijari * $tinggi;
                break;  
            default:
                // $hasil = 0;
                break;
        }
        return redirect('/form')->with('info','hasilnya adalah: ' . $hasil);
        // return view('form');
    }













    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function show(Volume $volume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function edit(Volume $volume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volume $volume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volume $volume)
    {
        //
    }
}
