@include('admin.partials.headerscript')
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
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->author }}</td>
                                <td>
                                <ul>
                                    <a href="/admin/categories/{{$book->category->id}}">{{ $book->category->name}}</a>
                                </ul>
                                </td>
                                <td>Rs{{ $book->price }}</td>
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

