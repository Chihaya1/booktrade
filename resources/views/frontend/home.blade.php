@extends('layouts.main')

@section('content')
<section class="book-img container">
    <div class="row">
        @foreach($books as $book)
        <!-- <h3 class="head">Books</h3> -->
            <div class="col-md-3 pt-4 book-1 ">
             <a href="{{ route('books.show',$book->id)}}"><img src="/images/{{ $book->image }}" class="img-fluid" alt="book"></a>
            <ul>
                <div>{{$book->title}}</div>
                <div>NRs.{{$book->price}}</div>

            </ul>

            </div>
        @endforeach

    </div>
</section>
@endsection