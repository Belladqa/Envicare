<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aspiration;
use App\PDF;

class AspirationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspiration = Aspiration::all();

        return view('aspiration', compact('aspiration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aspiration = Aspiration::all();
        return view('addaspiration', compact('aspiration'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->media;
        $namafile = time().rand(100,999);

        $aspiration = new Aspiration;
        $aspiration->tipe = $request->tipe;
        $aspiration->judul = $request->judul;
        $aspiration->deskripsi = $request->deskripsi;
        $aspiration->media = $namafile;

        $nm->move(public_path().'/assets/img/',$namafile);

        $aspiration->save();
        // Aspiration::create($request->all());
        return redirect('/reports')->with('status','Aspirasi telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aspiration = Aspiration::find($id);
        return view('detailaspiration', compact('aspiration'));
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
        DB::select('call HapusAspiration(?)', [$id]);
        return redirect('/reports');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id) //
    {
        $aspiration = Aspiration::find($id); //
        return view('laporanpdf', compact('aspiration')); //
        // $pdf = PDF::loadView('laporanpdf',compact('aspiration'));
        // return $pdf->download('laporan.pdf');
    }
}