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
                        <th>Delete</th>
                        <th>Total</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $book)
                        <tr>
                            <td>{{$book->name}}</td>
                            <td>
                            <img src="/images/{{$book->options->image}}"  class="img-fluid" width="250">
                            </td>
                            </td>  
                            <td>{{$book->price}}</td>
                            <td>{{$book->qty}}</td>

                            <td>
                                <form  onsubmit="return confirm('Are you sure?')"  action="{{route('cart.destroy',$book->rowId)}}"  method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                            <td>Rs. {{ $book->total()}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            Sub Total: Rs.{{Cart::subtotal()}} <br>
                            Grand Total:Rs.{{Cart::total()}}
                        </td>
                        <td>Items:{{Cart::count()}}</td>
                    </tr>
                </tbody>   
            </table> 
            <a href="" class="btn btn-dark">Checkout</a><br><br>    
        </div>       
</div>




@include('admin.partials.footerscript')

       

