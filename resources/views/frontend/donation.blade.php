@include('admin.partials.headerscript')
	
@include('admin.partials.header')
	<!-- navigation -->
    <div class="row no-gutters">
		<div class="col-md-2">
			@include('admin.partials.nav')
        </div>
        <div class= "col-md-10" >
            <h2>Donate Books</h2>
            <form action="" method="post">
                <div class="form-group col-md-6">
                    <label>Book name:</label>
                    <input type="text" class="form-control" id="book_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Condition of Book</label>
                        <select class="form-control" id="">
                            <option>First Hand</option>
                            <option>Second Hand</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Publisher</label>
                    <input type="publisher" class="form-control" id="publisher">
                </div>
                <div class="form-group col-md-6">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <div class="form-group col-md-6">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address" id="">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <button class="btn btn-dark"><a href="user.php">User Details</a></button>
            </form><br>
        </div>
</div>
@include('admin.partials.footerscript')