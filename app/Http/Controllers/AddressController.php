<?php

namespace App\Http\Controllers;
use App\Address;

use Illuminate\Http\Request;
use Auth;

class AddressController extends Controller
{
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
        $request->validate([
            'first_name'      => 'required',
            'last_name'       => 'required',
            'address'         => 'required',
            'province'        =>'required',
            'phone_number'    =>'required|unique:contacts|max:10',
            'card_number'     =>'required|unique:addresses|max:16'

        ]);
        $address = new Address;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->user_id = Auth::user()->id;
        $address->address = $request->address;
        $address->province = $request->province;
        $address->phone_number = $request->phone_number;
        $address->card_number = $request->card_number;

        $address->save();
        return redirect()->route('checkout.payment');
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
