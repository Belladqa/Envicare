<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class MembersController extends Controller
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
        // $users = DB::table('members')->get();
        // $member = DB::select("SELECT countMember('members')")[0];
        // $member = DB::select("SELECT countMasyarakat('1')")[0];
        $keyword = $request->get('keyword');
        $masyarakat = Member::all(); //membuat variabel dari model dan mengambil semua data
        
        if($keyword){
            $masyarakat = Member::where("name","LIKE","%$keyword%")->get();
        }
        return view('masyarakat', compact('masyarakat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masyarakat = Member::all();
        return view('addmember', compact('masyarakat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $masyarakat = new Member;
        // $masyarakat->nik = $request->nik;
        // $masyarakat->name = $request->name;
        // $masyarakat->username = $request->username;
        // $masyarakat->email = $request->email;
        // $masyarakat->telp = $request->telp;

        // $masyarakat->save();
        
        $request->validate([
            'nik' => 'numeric',
            'name' => 'required',
            'username' => 'required|alpha_num',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);

        Member::create($request->all());
        return redirect('/masyarakat')->with('status', 'Masyarakat telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masyarakat = Member::find($id);
        return view('detailmasyarakat', compact('masyarakat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masyarakat = Member::find($id);
        return view('editmember', compact('masyarakat'));
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
            'nik' => 'numeric',
            'name' => 'required',
            'username' => 'required|alpha_num',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);
        
        DB::table('members')
        ->where('id', $id)
        ->update(['nik' => $request->nik, 
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'telp' => $request->telp,
        ]);
        return redirect('/masyarakat')->with('status', 'Data masyarakat telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('members')->where('id',$id)->delete();
        return redirect('/masyarakat')->with('status','Masyarakat telah dihapus!');
    }
}
