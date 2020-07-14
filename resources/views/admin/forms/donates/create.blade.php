@include('admin.partials.headerscript')	
@include('admin.partials.header')
	<!-- navigation -->
    <div class="row no-gutters">
		<div class="col-md-2">
			@include('admin.partials.nav')
        </div>
        <div class= "col-md-10" >
            <h2>Donate Books</h2>
            <form action="/donates" method="post">
                @csrf
                <div class="form-group col-md-6">
                    <label>Book name:</label>
                    <input type="text" class="form-control" name="name">
                    {{$errors->first('title')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Email:</label>
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
                    <label>Condition of Book</label>
                        <select class="form-control" name="condition">
                            <option>First Hand</option>
                            <option>Second Hand</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author">
                    {{$errors->first('author')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" name="phone_number">
                    {{$errors->first('phone_number')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address">
                    {{$errors->first('address')}}
                </div>
                <div class="form-group col-md-6">
                <label>Description:</label>
                <textarea type="text" class="form-control"  placeholder="Description" name="description" row ="5" ></textarea>
                {{$errors->first('description')}}
            </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form><br>
        </div>
</div>
@include('admin.partials.footerscript')