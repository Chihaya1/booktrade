@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')	
    </div>
    <div class= "col-md-10" >
            <h2>Shipping Information</h2>
            <p>Please fill the details.<p>

            <form action="{{route('addresses.store')}}" method="post">
            @csrf
                <div class="form-group col-md-6">
                    <label>First Name:</label>
                    <input type="text" class="form-control" name="first_name">
                    {{$errors->first('first_name')}}
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="last_name">
                    {{$errors->first('last_name')}}
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
                    <label>Province:</label>
                    <input type="text" class="form-control" name="province">
                    {{$errors->first('province')}}
                </div>
                <!-- <a class="btn btn-primary" href="{{url('/orderinfo')}}">Next</a> -->
                <button href="{{route('checkout.payment')}}" type="submit" class="btn btn-dark">Payment</button>
                <!--  -->
            </form><br>
        </div>
    </div>
@include('admin.partials.footerscript')
   