<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customer')->get();
       return view('Master/Customer/index', ['customer' => $customer]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Master/Customer/create');
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

        DB::table('customer')->insert([
            'FIRST_NAME' => $request->firstname,
            'LAST_NAME' => $request->lastname,
            'PHONE' => $request->phone,
            'EMAIL' => $request->email,
            'STREET' => $request->street,
            'CITY' => $request->city,
            'STATE' => $request->state,
            'ZIP_CODE' => $request->zipcode
         

        ]);
   

    return redirect('Customerindex');
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
    public function edit($id)
    {
       $customer = DB::table('customer')
       ->where('CUSTOMER_ID', $id)->get();
        return view('Master/Customer/edit', ['customer' => $customer]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        Db::table('customer')
        ->where('CUSTOMER_ID', $request->customerid)
        ->update([
            'FIRST_NAME' => $request->firstname,
            'LAST_NAME' => $request->lastname,
            'PHONE' => $request->phone,
            'EMAIL' => $request->email,
            'STREET' => $request->street,
            'CITY' => $request->city,
            'STATE' => $request->state,
            'ZIP_CODE' => $request->zipcode,
            'CUSTOMER_STATUS' => $request->custa
        ]);
        
       
        return redirect('Customerindex');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('customer')
         ->where('CUSTOMER_ID', $id)
         ->delete();
       return redirect('Customerindex');

    }
}

