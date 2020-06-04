<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
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
        return view('admin.books.index',compact('books'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create',compact('categories'));
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
        $request->validate([
            'title'      => 'required|unique:books|max:255',
            'isbn'       => 'required|unique:books|max:13',
            'author'     =>'required',
            'description'=>'required',
            'price'      =>'required',
            // 'category_id'=>'required',
            'image'      => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // Book->blank object which represents model
        $book = new Book;
        $imagename = $request->image->getClientOriginalName();
        $book->title = $request->title;
        $book->user_id = Auth::user()->id;
        $book->isbn = $request->isbn;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->category_id =$request->category_id;
        $book->image = $imagename;
        $request->image->move(public_path('images'),$imagename);

        // return $request;

        $book->save();
        $book = Category::find($request->category_id);
        // $book->category();

        // $book->categories()->attach($categories);->used in Many:Many relation
        return redirect()->route('books.index')->with('status','Record saved');
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
        return view('admin.books.edit',compact('book'));
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
        $book->title = $request->title;
        $book->user_id = Auth::user()->id;
        $book->isbn = $request->isbn;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->category_id =$request->category_id;
        if($request->has('image')){

            $imagename = $request->image->getClientOriginalName();
            $book->image = $imagename;
            $request->image->move(public_path('images'),$imagename);
        }

        //  return $request;

        $book->save();
        $book = Category::find($request->category_id);
        $book->category();

        // $book->categories()->attach($categories);->used in Many:Many relation
        return redirect()->route('books.index')->with('status','Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        unlink(public_path('/images/'.$book->image));
        $book->delete();
        return redirect('/books')->with('status','Book Deleted');
    }
}
