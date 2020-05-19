<?php

namespace App\Http\Controllers;

use App\Sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['create']]);
    }
    public function index()
    {
        $sells = Sell::all();
        return view('admin.forms.sells.index',compact('sells'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.sells.create');
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
            'title'      => 'required|max:50',
            'category'   => 'required|max:50',
            'author'     =>'required',
            'price'      =>'required',
            'condition'  => 'required',
            
        ]);
        $sell = new Sell;
        $sell->title     = $request->title;
        $sell->category  = $request->category;
        $sell->author    = $request->author;
        $sell->price     = $request->price;
        $sell->condition = $request->condition;

        //  return $request;

        $sell->save();
        return redirect()->route('sells.index')->withStatus('Sell Added');
           
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function show(Sell $sell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell)
    {
        return view('admin.forms.sells.edit',compact('sell'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell $sell)
    {
        $sell->title     = $request->title;
        $sell->category  = $request->category;
        $sell->author    = $request->author;
        $sell->price     = $request->price;
        $sell->condition = $request->condition;

        // return $request;

        $sell->save();
        return redirect()->route('sells.index')->withStatus('Sell Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect('/sells')->with('status','Sell Deleted');
    }
}
