<?php

namespace App\Http\Controllers\Master;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table user
       // $user = DB::table('user')->get();
        $user = User::all();

        // mengirim data user ke view index
       return view('Master/User/index', ['user' => $user]);
     
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() // method untuk menampilkan view form create User

    {
        //memanggil view create
        return view ('Master/User/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Method untuk insert data ke tabel user 
    public function store(Request $request)
    {
        //insert data ke tabel user
        //DB::table('user')->insert([
        User::create([
            'FIRST_NAME' => $request->firstname,
            'LAST_NAME' => $request->lastname,
            'EMAIL' => $request->email,
            'PHONE' => $request->phone,
            'PASSWORD' => $request->pass        

        ]);
   
        // dialihkan ke halam index
    return redirect('Userindex');
}
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // method untuk edit data user
    public function edit($id)
    {
        // mengambil data user berdasarkan id yang dipilih
       // $user = DB::table('user')
       //->where('USER_ID', $id)->get();
         $user = User::where('user_id',$id)->get();

       // passing data user yang didapat ke view edit.blade.php
        return view('Master/User/edit', ['user' => $user]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //update data user
    public function update(Request $request)
    {
        
       //Db::table('user')
        //->where('USER_ID', $request->userid)
        //->update([
         $user = user::where('USER_ID', $request->userid)
        ->update([
            'FIRST_NAME' => $request->firstname,
            'LAST_NAME' => $request->lastname,
            'EMAIL' => $request->email,
            'PHONE' => $request->phone,
            'PASSWORD' => $request->pass,
            'JOB_STATUS' => $request->jobstatus          

        ]);
   
    // mengalihkan ke halaman userindex
    return redirect('Userindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //untuk menghapus data user
    public function destroy($id)
    {

    // menghapus data user berdasarkan id yang dipilih
          DB::table('user')
         ->where('USER_ID', $id)
         ->delete();

         // alihkan halaman ke halaman userindex
       return redirect('Userindex');
        
    }
}
