<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use DB;


class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function userorders()
    {
         $user_id=Auth::user()->id;
         
        $orders=DB::table('book_order')
        ->leftJoin('books','books.id','=','book_order.book_id')
        ->leftJoin('orders','orders.id','=','book_order.order_id')
        ->where('orders.user_id','=',$user_id)->get();
        
        return view('profile.userorders',compact('orders'));
    }

}
