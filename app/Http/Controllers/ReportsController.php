<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Report;
use App\PDF;

class ReportsController extends Controller
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
        // $aspiration = Aspiration::all();
        $report   = Report::all();

        return view('report', compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $report = Report::all();
        return view('addreport', compact('report'));
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

        $report = new Report;
        $report->tipe = $request->tipe;
        $report->judul = $request->judul;
        $report->deskripsi = $request->deskripsi;
        $report->media = $namafile;

        $nm->move(public_path().'/assets/img/',$namafile);

        $report->save();
        // Report::create($request->all());
        return redirect('/reports')->with('status','Laporan telah ditambahkan!');

        $request->validate([
            'media' => 'mimes:jpeg,png,jpg'
        ]);

        // $namafile = '/assets/img/'.$request->media->getClientOriginalName();

        // $request->media->move(public_path('/assets/img'),$imgName);

        // $report = new Report;
        // $report->tipe = $request->tipe;
        // $report->judul = $request->judul;
        // $report->deskripsi = $request->deskripsi;
        // $report->media = $namafile;
        
        // $report->save();
        // return redirect('/reports')->with('status','Laporan telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('detailreport', compact('report'));
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
        DB::table('reports')->where('id',$id)->delete();
        return redirect('/reports')->with('status','Laporan telah dihapus!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id) //
    {
        $report = Report::find($id); //
        return view('laporan-pdf', compact('report')); //
        // $pdf = PDF::loadView('laporan-pdf',compact('report'));
        // return $pdf->download('laporan.pdf');
    }
}
