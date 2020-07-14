@include('admin.partials.headerscript')
@include('admin.partials.header')

<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
    </div>
    <div class= "col-md-10" >
        <h2>Sell Books</h2>
        <p>Fill the form to sell your books.</p>
        <form action="{{route('sells.store')}}" method="post">
            @csrf
            <div class="form-group col-md-6">
                <label>Book name:</label>
                <input type="text" class="form-control" name="name">
                {{$errors->first('title')}}
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
                {{$errors->first('email')}}
            </div>
            <div class="form-group col-md-6">
                <label>Category</label>
                    <select class="form-control" name="category">
                        <option>School</option>
                        <option>+2</option>
                        <option>A Level</option>
                        <option>Comics</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label>Author</label>
                <input type="text" class="form-control" name="author">
                {{$errors->first('author')}}
            </div>
            <div class="form-group col-md-6">
                <label>Price:</label>
                <input type="text" class="form-control" name="price">
                {{$errors->first('price')}}
            </div>
            <div class="form-group col-md-6">
                <label>Condition of Book</label>
                    <select class="form-control" name="condition">
                        <option>First Hand</option>
                        <option>Second Hand</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>
</div>
@include('admin.partials.footerscript')
