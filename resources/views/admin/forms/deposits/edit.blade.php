@include('admin.partials.headerscript')
@include('admin.partials.header')
	<!-- navigation -->
    <div class="row no-gutters">
		<div class="col-md-2">
			@include('admin.partials.nav')
        </div>
    <div class= "col-md-10" > 
        <h2>Edit Deposit Books</h2>
        <div class="content">
            <p>Please fill the details of book you want to deposit.</p> 
        </div>
        <form action="{{route('deposits.update',$deposit->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input value="{{ $deposit->email }}" class="form-control" name="email">
                {{$errors->first('email')}}
            </div>
            <div class="form-group col-md-6">
                <label>Book name:</label>
                <input value="{{ $deposit->name}}" class="form-control" name="name">
                {{$errors->first('title')}}
            </div>
            <div class="form-group col-md-6">
                <label>Author</label>
                <input value="{{ $deposit->author}}" class="form-control" name="author">
                {{$errors->first('author')}}
            </div>
            <div class="form-group col-md-6">
                <label>Price:</label>
                <input value="{{ $deposit->price}}" class="form-control" name="price">
                {{$errors->first('price')}}
            </div>
            <div class="form-group col-md-6">
                <label>Condition of Book</label>
                    <select class="form-control" name="condition">
                        <option {{ $deposit->firsthand ? 'selected' : ''}}>First Hand</option>
                        <option {{ $deposit->secondhand ? 'selected' : ''}}>Second Hand</option>
                        {{$errors->first('condition')}}
                    </select>
            </div>
            <div class="form-group col-md-6">
                <p><b>Photos max 2MB</b></p>
                <label>Book image</label>
                <input type="file" name="image">
                {{$errors->first('image')}}
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>
</div>
@include('admin.partials.footerscript')