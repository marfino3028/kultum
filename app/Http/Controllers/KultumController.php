<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Kultum;
use App\Kategori;
use App\Santri;
use Validator,File,Redirect,Response;
use Carbon\Carbon;

class KultumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ar_kultum = DB::table('kultum')
        ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
        ->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
        ->orderBy('id', 'desc')
        ->paginate(5);

        return view('kultum.index', compact('ar_kultum'));
    }

    public function search(Request $request)
    {
        $search = DB::table('kultum')->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*','santri.nama AS santri')
        ->when($request->q, function ($query) use ($request) 
        {
            $query->where('judul', 'LIKE', "%{$request->q}%")
            ->orWhere('isi', 'LIKE', "%{$request->q}%");
        })->paginate(5);
        $search->appends($request->only('q'));

        if(!$search->isEmpty()) {
            return view('kultum.search', ['search' => $search, 'q' => $request->q]);
        }else{
            return view('kultum.kosong');
        }
    }


    public function filter(Request $request){
     $filter = DB::table('kultum')->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
     ->join('santri', 'santri.id', '=', 'kultum.santri_id')
     ->select('kultum.*','santri.nama AS santri')
     ->when($request->cat, function ($query) use ($request) {
        $query->where('kategori.id', 'LIKE', "%{$request->cat}%");
    })->paginate(5);
     $filter->appends($request->only('cat'));

     if(!$filter->isEmpty()) {
      return view('kultum.filter', ['filter' => $filter, 'cat' => $request->cat]);
  }  else {
      return view('kultum.kosong');
  }
}

public function home()
{
        //
    $ar_kultum = DB::table('kultum')
    ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
    ->join('santri', 'santri.id', '=', 'kultum.santri_id')
    ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
    ->orderBy('id', 'desc')
    ->limit(2)
    ->get();

    return view('layouts.home', compact('ar_kultum'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!empty(Auth::user())){
            return view('kultum.form');
        }else{
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validator = Validator::make(request()->all(),[
            'judul'=>'required|max:55',
            'isi'=>'required',
            'kategori'=>'required',
        ],[
            'judul.required'=>'Silahkan isi judul kultum',
            'judul.max'=>'Judul melebihi batas karakter',
            'isi.required'=>'Silahkan isi materi kultum',
            'kategori.required'=>'Silahkan pilih kategori kultum',
        ])->validate();

        DB::table('kultum')->insert(
            [
                'judul'=>$request->judul,
                'isi'=>$request->isi,
                'kategori_id'=>$request->kategori,
                'santri_id'=>$request->santri,
                'tanggal'=>Carbon::now(),
            ]
        );

        return redirect('/kultum');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
        //
        $ar_kultum = DB::table('kultum')
        ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
        ->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
        ->where('kultum.judul','=',$judul)
        ->get();

        return view('kultum.show', compact('ar_kultum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        if(!empty(Auth::user())){            
            $data = DB::table('kultum')->where('id',$id)->get();
            return view('kultum/form_edit',compact('data'));
        }else{
            return redirect('/login');
        }
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
        //validasi
        $validator = Validator::make(request()->all(),[
            'judul'=>'required|max:55',
            'isi'=>'required',
            'kategori'=>'required',
            'santri'=>'required',
        ],[
            'judul'=>'Silahkan isi judul kultum',
            'isi'=>'Silahkan isi materi kultum',
            'kategori'=>'Silahkan pilih kategori kultum',
            'santri'=>'Tentukan siapa pembuat kultum'
        ])->validate();

        DB::table('kultum')->where('id',$request->id)->update(
            [
                'judul'=>$request->judul,
                'isi'=>$request->isi,
                'kategori_id'=>$request->kategori,
                'santri_id'=>$request->santri,
                'tanggal'=>Carbon::now(),
            ]
        );
        return redirect('/kultum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function destroy($id)
    {
        //
        DB::table('kultum')->where('id','=',$id)->delete();
        return redirect ('/kultum');
    }
}
