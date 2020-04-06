@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')	
    </div>
    <div class= "col-md-9" >
        <h2>Order Information</h2>
        <p>Please fill the details.<p>
        <table style="width:70%">
            <tr>
                <th>Product</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Book_name X 1</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>Sub Total</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Price</td>
            </tr>
            </table> 
            <hr> 
            <a class="btn btn-dark" href="{{url('/payment')}}">Next</a>     
            <a class="btn btn-success" href="{{url('')}}" >Back to Cart</a> 
                        
    </div>  
</div>
@include('admin.partials.footerscript')