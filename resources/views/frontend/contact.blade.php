@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
        
    </div>
    <div class="col-md-10">
        <h2>
           Contact Us
        </h2>
        <form action="" method="post">
            <div class="form-group col-md-6">
                <label>Firstname:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname" name="firstname">
            </div>
            <div class="form-group col-md-6">
                <label>Lastname:</label>
                <input type="text" class="form-control" id="laststname" placeholder="Enter Lastname" name="lastname">
            </div>
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label>Phone Number:</label>
                <input type="text" class="form-control"  placeholder="Enter Phone number" name="phone_number">
            </div>
            <div class="form-group col-md-6">
                <label>Address:</label>
                <input type="text" class="form-control"  placeholder="Enter Address" name="address">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>    
</div>
@include('admin.partials.footerscript')
    
    
    