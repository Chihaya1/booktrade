@extends('layouts.main')
@section('content')
 <!-- Books -->
        <section class="book-img container">
                <div class="row">
                    @foreach($books as $book)
                        <div class="col-md-3 pt-4 book-1 ">
                            <a href=""> <img src="/images/{{ $book->image }}" class="img-fluid" alt="book">{{$book->title}}</a>
                        </div>
                         
                        
                    @endforeach
                   
                </div>
        </section>
    @endsection
