<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\DonateConfirm;
use App\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
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
        
        $donates = Donate::all();
        return view ('admin.forms.donates.index',compact('donates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.donates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name'             => 'required|max:50',
            'email'             =>'required|email|unique:donates',
            'category'          => 'required',
            'author'            => 'required',
            'phone_number'      =>'required|unique:donates',
            'address'           => 'required',
            'condition'         =>'required',
            'description'       => 'required',
            
        ]);
        $donate = new Donate;
        $donate->name         = $request->name;
        $donate->email          = $request->email;
        $donate->author         = $request->author;
        $donate->category       = $request->category;
        $donate->phone_number   = $request->phone_number;
        $donate->address        = $request->address;
        $donate->condition      = $request->condition;
        $donate->description    = $request->description;

        // return $request;
         $donate->save();
         Mail::to($donate->email)->send(new DonateConfirm($donate));
         return redirect()->route('donates.index')->withStatus('Donate added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit(Donate $donate)
    {
        return view('admin.forms.donates.edit',compact('donate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donate $donate)
    {
        $donate->name         = $request->name;
        $donate->email          = $request->email;
        $donate->author         = $request->author;
        $donate->category       = $request->category;
        $donate->phone_number   = $request->phone_number;
        $donate->address        = $request->address;
        $donate->condition      = $request->condition;
        $donate->description    = $request->description;

        // return $request;
         $donate->save();
         return redirect()->route('donates.index')->withStatus('Donate Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donate $donate)
    {
        $donate->delete();
        return redirect('/donates')->with('status','Donate Deleted');
    }
}
