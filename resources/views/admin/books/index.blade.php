<!-- form bata ako data dekhaune page -->
@include('admin.partials.headerscript')
@include('admin.partials.sidebar')
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
        <div>
            <label><b>Condition of Book</b></label>
                <select class="form-control" id="">
                    <option>First Hand</option>
                    <option>Second Hand</option>
                </select>
        </div><br><br>
        <div>
            <label><b>Default Sorting</b></label>
                <select class="form-control" id="">
                            <option>Sort By Latest</option>
                            <option>Sort By Popularity</option>
                </select>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                </div>
                @endif
        </div>
        <div class="container mt-4">
            <table class="table table-bordered table-hover table-reponsive">
                <h3 class="ml-2" >List of  Books</h3>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Isbn</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->author }}</td>
                                <td>
                                <ul>
                                    <a href="/admin/categories/{{$book->category->id}}">{{ $book->category->name}}</a>
                                </td>
                                <td>{{ $book->price }}</td>
                                <td>
                                    <img src="/images/{{ $book->image }}" class="img-fluid" alt="book">
                                </td>
                                <td>{{ $book->description }}</td>
                            
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('books.edit',$book->id) }}">Edit</a><br>
                                    <form onsubmit="return confirm('Are you sure?')" action="{{route('books.destroy',$book->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table> 
        </div>
    </div>
</div>
@include('admin.partials.footerscript')