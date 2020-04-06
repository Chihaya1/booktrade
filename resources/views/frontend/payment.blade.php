@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
            @include('admin.partials.nav')
			
        </div>
        <div class= "col-md-9 offset-md-1" >
            <h3 class="text-center mt-5">Payment Information</h3>
        
            <div class="jumbotron mr-5">               
                <input type="radio" id="" name="stripe">
                <label><h4>Direct Payment</h4></label><br>
                <p>Using Credit Card and Debit Card</p>
                 <div class="icon-container">
                    <i class="fa fa-cc-stripe" style="color:purple;"></i>
                </div>
                <div class="cash">
                    <input type="radio" id="" name="cash" checked>
                    <label><h4>Cash on Delivery</h4></label><br>
                    <p>Your Personal Details are accessed to place your order</p>
                    <a class="btn btn-light " href="{{url('/order')}}" role="button">Place Order</a>  
                </div>
            </div>
            <!-- <div class="pull-right mr-5 mb-3">
                <a class="btn btn-secondary " href="#" role="button">Previous</a>
                <a class="btn btn-secondary " href="#" role="button">Back To Cart</a>
            </div> -->
        </div>
</div>
@include('admin.partials.footerscript')
