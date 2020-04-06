@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
            @include('admin.partials.nav')
        </div>
        <div class= "col-md-10" >
            <h2>Order Books</h2>
            <div class="content">
                <p>Please fill the details.</p> 
            </div>
            <form action="" method="post">
                <div class="form-group col-md-6">
                    <label>Book Name:</label>
                    <input type="name" class="form-control" id="book_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Name:</label>
                    <input type="name" class="form-control" id="name">
                </div>
                <div class="form-group col-md-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-md-6">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <div class="form-group col-md-6">
                    <label>Address:</label>
                    <input type="address" class="form-control" id="address">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form><br>
        </div>
</div>
    @include('admin.partials.footerscript')
  
            