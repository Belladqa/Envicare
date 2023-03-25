<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Officer;

class OfficersController extends Controller
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
    public function index(Request $request)
    {
        $petugas = DB::select("SELECT countOfficer('1')")[0];
        $keyword = $request->get('keyword');
        $officer = Officer::all();

        if($keyword){
            $officer = Officer::where("name","LIKE","%$keyword%")->get();
        }
        return view('officer', compact('officer','petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $officer = Officer::all();
        return view('addofficer', compact('officer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $officer = new Officer;
        // $officer->name = $request->name;
        // $officer->username = $request->username;
        // $officer->email = $request->email;
        // $officer->telp = $request->telp;
        // $officer->timestamp = $request->timestamp;

        // $officer->save();

        $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);

        Officer::create($request->all());
        return redirect('/officer')->with('status', 'Petugas telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $officer = Officer::find($id);
        return view('detailofficer', compact('officer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officer = Officer::find($id);
        return view('editofficer',compact('officer'));
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
        $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);

        DB::table('officers')
        ->where('id', $id)
        ->update(['name' =>$request->name,
                'username' => $request->username,
                'email' => $request->email,
                'telp' => $request->telp,
        ]);
        return redirect('/officer')->with('status', 'Data petugas telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('officers')->where('id',$id)->delete();
        return redirect('/officer')->with('status', 'Petugas telah dihapus!');
    }
}
