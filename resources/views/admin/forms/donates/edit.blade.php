@include('admin.partials.headerscript')	
@include('admin.partials.header')
	<!-- navigation -->
    <div class="row no-gutters">
		<div class="col-md-2">
			@include('admin.partials.nav')
        </div>
        <div class= "col-md-10" >
            <h2>Edit Donate Books</h2>
            <form action="{{route('donates.update',$donate->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label>Book name:</label>
                    <input value="{{ $donate->name }}" class="form-control" name="name">
                    {{$errors->first('title')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Email:</label>
                    <input value="{{$donate->email }}" class="form-control" name="email">
                    {{$errors->first('email')}}
                </div>
                <div class="form-group col-md-6">
                <label>Category</label>
                    <select class="form-control" name="category">
                        <option {{ $donate->school ? 'selected' : ''}}>School</option>
                        <option {{ $donate->plustwo ? 'selected' : ''}}>+2</option>
                        <option {{ $donate->ALevel ? 'selected' : ''}}>A Level</option>
                        <option {{ $donate->comics ? 'selected' : ''}}>Comics</option>
                    </select>
            </div>
                <div class="form-group col-md-6">
                    <label>Condition of Book</label>
                        <select class="form-control" name="condition">
                            <option {{ $donate->firsthand ? 'selected' : ''}}>First Hand</option>
                            <option {{ $donate->secondhand ? 'selected' : ''}}>Second Hand</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Author</label>
                    <input value="{{ $donate->author}}" class="form-control" name="author">
                    {{$errors->first('author')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Phone number:</label>
                    <input value="{{ $donate->phone_number}}" class="form-control" name="phone_number">
                    {{$errors->first('phone_number')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Address:</label>
                    <input value="{{$donate->address}}" class="form-control" name="address">
                    {{$errors->first('address')}}
                </div>
                <div class="form-group col-md-6">
                <label>Description:</label>
                <textarea class="form-control"  placeholder="Description" name="description" row ="5" >{{ $donate->description }}</textarea>
                {{$errors->first('description')}}
            </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form><br>
        </div>
</div>
@include('admin.partials.footerscript')