@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')	
    </div>
    <div class= "col-md-9 offset-md-1" >
            <div class="page-title"> 
                <h1>Product Information</h1>
            </div>
            <div class="cart-header">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-2 cartheader-col"> &nbsp; &nbsp; Item </div>
                    <div class="col-sm-12 col-md-3 col-lg-5 cartheader-col"> Product</div>
                    <div class="col-sm-12 col-md-2 col-lg-2 cartheader-col">Price</div>
                    <div class="col-sm-12 col-md-3 col-lg-2 cartheader-col">Qty</div>
                    <div class="col-sm-12 col-md-3 col-lg-1 cartheader-col">Total</div>

                </div>
            </div><br>
            <a class="btn btn-primary" href="{{url('')}}" >Update Cart</a>    
            <a class="btn btn-success" href="{{url('/checkout')}}" >Proceed to Checkout</a>    
    </div>
</div>
@include('admin.partials.footerscript')