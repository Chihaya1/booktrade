@include('admin.partials.headerscript')
	
@include('admin.partials.header')
	<!-- navigation -->
    <div class="row no-gutters">
		<div class="col-md-2">
			@include('admin.partials.nav')
        </div>
    <div class= "col-md-10" > 
        <h2>Deposit Books</h2>
        <div class="content">
            <p>Please fill the details of book you want to deposit.</p> 
        </div>
        <form enctype="multipart/form-data" action="" method="post">
            @csrf
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group col-md-6">
                <label>Book name:</label>
                <input type="text" class="form-control" id="book_name">
            </div>
            <div class="form-group col-md-6">
                <label>Author/Publication name:</label>
                <input type="text" class="form-control" id="author">
            </div>
            <div class="form-group col-md-6">
                <label>MRP:</label>
                <input type="email" class="form-control" id="MRP">
            </div>
            <div class="form-group col-md-6">
                <label>Condition of Book</label>
                    <select class="form-control" id="">
                        <option>First Hand</option>
                        <option>Second Hand</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <p><b>Photos max 2MB</b></p>
                <label>Book image</label>
                <input type="file" name="book_image" id="">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>
</div>
@include('admin.partials.footerscript')
