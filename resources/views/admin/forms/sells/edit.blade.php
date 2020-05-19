@include('admin.partials.headerscript')
@include('admin.partials.header')

<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
    </div>
    <div class= "col-md-10" >
        <h2>Sell Books</h2>
        <p>Fill the form to sell your books.</p>
        <form action="{{route('sells.update',$sell->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label>Book name:</label>
                <input value="{{ $sell->title }}" class="form-control" name="title">
                {{$errors->first('title')}}
            </div>
            <div class="form-group col-md-6">
                <label>Category</label>
                    <select class="form-control" name="category">
                        <option {{ $sell->school ? 'selected' :''}}>School</option>
                        <option {{ $sell->plustwo ? 'selected' :''}}>+2</option>
                        <option {{ $sell->ALevel ? 'selected' :''}}>A Level</option>
                        <option {{ $sell->comics ? 'selected' :''}}>Comics</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label>Author</label>
                <input value="{{ $sell->author }}"class="form-control" name="author">
                {{$errors->first('author')}}
            </div>
            <div class="form-group col-md-6">
                <label>Price:</label>
                <input value="{{ $sell->price }}" class="form-control" name="price">
                {{$errors->first('price')}}
            </div>
            <div class="form-group col-md-6">
                <label>Condition of Book</label>
                    <select class="form-control" name="condition">
                        <option {{ $sell->firsthand ? 'selected' :''}}>First Hand</option>
                        <option {{ $sell->secondhand ? 'selected' :''}}>Second Hand</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>
</div>
@include('admin.partials.footerscript')
