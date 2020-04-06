<?php

namespace App\Http\Controllers;

use App\Book;
use Auth;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // lists dekhau cha
        $books = Book::all();
        // return $books;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // Book->blank object which represents model
        $book = new Book;
        // $imagename = $request->file('file');
        $imagename = $request->image->getClientOriginalName();

        $book->title = $request->title;
        $book->isbn = $request->isbn;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->user_id = Auth::user()->id;
         $book->image = $imagename;
        $request->image->move(public_path('images'),$imagename);

        // return $request;

         $book->save();
        // return redirect('/books')->with('status','Record saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
