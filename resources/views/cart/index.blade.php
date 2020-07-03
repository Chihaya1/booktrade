@include('admin.partials.headerscript')
@include('admin.partials.header')
<div class="row no-gutters">
		<div class="col-md-2">
             @include('admin.partials.nav')
        </div>
        <div class= "col-md-10" >
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
                @endif
                 </div>
            <div class="page-title"> 
                <h1>Shopping Cart</h1>
            </div><!--page title-->
            <table class="table table-bordered table-hover table-reponsive">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delete</th>
                        
                       
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $cartItem)
                        <tr>
                            <td>{{$cartItem->name}}</td>
                            <!-- <td class="cart_product">
                                    <p><img src="{{url('images',$cartItem->options->img)}}" class="img-responsive" width="250"></p>
                                </td> -->
                            <td>
                            <img src="/images/{{$cartItem->image}}"  class="img-fluid" width="200"> 
                            </td>
                            </td>  
                            <td>{{$cartItem->price}}</td>
                            <td>{{$cartItem->qty}}</td>
                           
                            <td>Rs. {{ $cartItem->subtotal()}}</td>

                            <td>
                                <form  onsubmit="return confirm('Are you sure?')"  action="{{route('cart.destroy',$cartItem->rowId)}}"  method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            Sub Total: Rs.{{Cart::subtotal()}}
                             <br>
                             <td></td>
                            Grand Total:Rs.{{Cart::total()}}
                            <td></td>
                        </td>
                        <td>Items:{{Cart::count()}}</td>
                        <td></td>
                    </tr>
                </tbody>   
            </table> 
            <a href="{{route('checkout.shipping')}}" class="btn btn-dark">Checkout</a><br><br>    
        </div>       
</div>




@include('admin.partials.footerscript')

       

