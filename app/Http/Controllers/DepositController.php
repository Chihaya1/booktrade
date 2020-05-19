<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;


class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposits = Deposit::all();
        return view('admin.forms.deposits.index',compact('deposits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.deposits.create');
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
            'email'      => 'required|email|unique:deposits',
            'title'      => 'required|max:255',
            'author'     => 'required',
            'condition'  => 'required',
            'price'      => 'required',
            'image'      => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        $deposit = new Deposit;
        
        $imagename = $request->image->getClientOriginalName();
        $deposit->email = $request->email;
        $deposit->title = $request->title;
        $deposit->author = $request->author;
        $deposit->price = $request->price;
        $deposit->condition = $request->condition;
         $deposit->image = $imagename;
        $request->image->move(public_path('images'),$imagename);

        // return $request;

         $deposit->save();
         return redirect()->route('deposits.index')->withStatus('Deposit added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function show(Deposit $deposit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposit $deposit)
    {
        return view('admin.forms.deposits.edit',compact('deposit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $deposit)
    {
        
        $imagename = $request->image->getClientOriginalName();
        $deposit->email = $request->email;
        $deposit->title = $request->title;
        $deposit->author = $request->author;
        $deposit->price = $request->price;
        $deposit->condition = $request->condition;
        $deposit->image = $imagename;
        $request->image->move(public_path('images'),$imagename);

        // return $request;

         $deposit->save();
         return  redirect()->route('deposits.index')->withStatus('Deposit Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposit $deposit)
    {
        $deposit->delete();
        return redirect('/deposits')->with('status','Deposit Deleted');
    }
}
