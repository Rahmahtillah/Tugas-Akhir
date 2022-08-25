<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\User;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $data = DB::table('hasilpengujians')->get();
        $count = DB::table('hasilpengujians')->count();
        $mhs = DB::table('users')->where('isAdmin', '0')->count();
        return view('admin.homepage', compact('data','count','mhs') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        return view('admin.add', compact('jurusan', 'prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nim' =>['required', 'string', 'max:15'],
            'prodi_id' =>['required', 'string', 'max:255'],
            'jurusan_id' =>['required', 'string', 'max:255'],
            'nohp' =>['required', 'string', 'max:255'],
            'alamat' =>['required', 'string', 'max:255'],
            'jeniskelamin' =>['required', 'string', 'max:255'],
            'tgllahir' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi_id' => $request->jurusan_id,
            'jurusan_id' => $request->jurusan_id,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'tgllahir' => $request->tgllahir,
            'email' => $request->email,
        ]);
        User::create([
            'email' => $request->email,
            'isAdmin' => 0,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('student'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $data = mahasiswa::where('id', $id)->first();
        return view('admin.datastudent', compact('data','jurusan','prodi'));
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
        mahasiswa::where('id',$id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi_id' => $request->jurusan_id,
            'jurusan_id' => $request->jurusan_id,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'tgllahir' => $request->tgllahir,
            'email' => $request->email,
        ]);
        return redirect(route('student'));
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

    public function datastudent(){
        $pegawai = mahasiswa::all();
        $data = mahasiswa::all();
    	return view('admin.tabledata', compact('data','pegawai'));
    }

    public function pengujian(){
        $verbal = DB::table('datasets')->where('Hasil','like','%Verbal%')->limit(5)->get();
        $numerik = DB::table('datasets')->where('Hasil','like','%Numerik%')->limit(5)->get();
        // $data = DB::table('datasets')->where('Hasil','like','%%')->limit(5)->get();
        // $data = DB::table('datasets')->where('Hasil','like','%%')->limit(5)->get();
        // $data = DB::table('datasets')->where('Hasil','like','%%')->limit(5)->get();
        return view('admin.pengujian', compact('verbal', 'numerik'));
    }

    public function histori(){
        $title = "Histori";
        $data = DB::table('hasilpengujians')->get();
        return view('admin.histori', compact('data', 'title'));
    }
    public function delete($id){
        mahasiswa::find($id)->delete();
        return redirect(route('student'));
    }

    public function upload(Request $request)
    {
        $title = "histori";
        $data = DB::table('historis')->get();
        $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/verbal.py"));
        $kita = explode('_______________________', $a);
        $hasil = $kita[0];
        session()->put('bakatverbal', $hasil);
        return view('admin.histori', compact('hasil','title','data'));
    }
}