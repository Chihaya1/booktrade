<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
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
        $orders = Order::all();
       return view('admin.forms.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'first_name'      => 'required|max:50',
            'last_name'       => 'required|max:50',
            'email'           => 'required|email|unique:contacts',
            'phone_number'    => 'required|unique:contacts',
            'address'         => 'required',
            'quantity'        => 'required',
        ]);
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->title       = $request->title;
        $order->first_name  = $request->first_name;
        $order->last_name   = $request->last_name;
        $order->email       = $request->email;
        $order->phone_number= $request->phone_number;
        $order->address     = $request->address;
        $order->quantity    = $request->quantity;

        // return $request;

        $order->save();
        return redirect()->route('orders.index')->withStatus('Order added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.forms.orders.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // $order->user_id = Auth::user()->id;
        $order->title       = $request->title;
        $order->first_name  = $request->first_name;
        $order->last_name   = $request->last_name;
        $order->email       = $request->email;
        $order->phone_number= $request->phone_number;
        $order->address     = $request->address;
        $order->quantity    = $request->quantity;

        // return $request;

        $order->save();
        return redirect()->route('orders.index')->withStatus('Order Updated');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('/orders')->with('status','Order Deleted');
    }
}
