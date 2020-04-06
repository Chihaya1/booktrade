@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')	
    </div>
    <div class= "col-md-10" >
            <h2>Checkout Information</h2>
            <p>Please fill the details.<p>

            <form action="" method="post">
                <div class="form-group col-md-6">
                    <label>First Name:</label>
                    <input type="text" class="form-control" id="first_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" id="last_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-md-6">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address" id="">
                </div>
                <div class="form-group col-md-6">
                    <label>Province Number:</label>
                        <select class="form-control" id="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <a class="btn btn-primary" href="{{url('/orderinfo')}}">Next</a>
                <a  class="btn btn-dark">Back to cart</a>
            </form><br>
        </div>
    </div>
@include('admin.partials.footerscript')
   
    