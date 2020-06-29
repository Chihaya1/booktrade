<!-- Form Vako page -->
@include('admin.partials.headerscript')
@include('admin.partials.sidebar')
<!-- navigation -->
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
    
        <form action="{{route('books.update',$book->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label>Book name:</label>
                <input type="text" value="{{ $book->name}}" class="form-control"  name="title">
                {{$errors->first('title')}}
            </div>
            <div class="form-group col-md-6">
                <label>Isbn Number:</label>
                <input type="text" value="{{ $book->isbn}}" class="form-control"  name="isbn">
                {{$errors->first('isbn')}}
            </div>
            <div class="form-group col-md-6">
                <label>Author:</label>
                <input type="text" value="{{ $book->author}}" class="form-control"  name="author">
                {{$errors->first('author')}}
            </div>
            <div class="form-group col-md-6">
                <label>Image:</label>
                <input type="file" value="{{ $book->image}}" class="form-control" name="image">
                {{$errors->first('image')}}
            </div>
            <div class="form-group col-md-6">
                <label>Price:</label>
                <input type="text" value="{{ $book->price}}" class="form-control"  name="price">
                {{$errors->first('price')}}
            </div>
            <div class="form-group col-md-6">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    @foreach(App\Category::all() as $category)
                            <option name="category_id[]" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>        
            </div>
            <div class="form-group col-md-6">
                <label>Description:</label>
                <textarea type="text"  value="{{ $book->description}}" class="form-control"  name="description" rows="5">{{ $book->description}}</textarea>
                {{$errors->first('description')}}
            </div>
           
             <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>    
</div>
@include('admin.partials.footerscript')