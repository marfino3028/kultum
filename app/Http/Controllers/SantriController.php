<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator,File,Redirect,Response;


class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ar_santri = DB::table('santri')->get();
        //"SELECT * FROM kategori"
        return view('santri.index', compact('ar_santri') );
    }


    public function show($id)
    {
        //
        $ar_santri = DB::table('santri')
        ->join('asal', 'asal.id', '=', 'santri.asal_id')
        ->select('santri.*', 'asal.nama AS asal')
        ->where('santri.id', '=', $id)
        ->get();

        return view('santri.show', compact('ar_santri'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
