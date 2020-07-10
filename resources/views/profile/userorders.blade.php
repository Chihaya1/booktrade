@include('admin.partials.headerscript')
<title>Order</title>
@include('admin.partials.header')

<div class="row no-gutters">
    <div class="col-md-2">
        
    </div>
    <div class= "col-md-10" >
        <style>
            table td { padding:10px;}
        </style>
         <!-- <div class=""> -->
            <section><br>
                <div class="row">
                     <div class="col-md-4 well well-sm">
                        <div class="card border-secondary mb-3" style="max-width: 75%;">
                            <div class="card-header">Profile Menu</div>
                            <div class="card-body text-secondary">
                                @include('profile.menu')
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-8">
                    <h3><span style="color: green;">{{Auth::user()->first_name}}</span>, Your Orders</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Author</th>
                                <th>Quantity</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{ucwords($order->name)}}</td>
                                    <td>{{ucwords($order->price)}}</td>
                                    <td>{{ucwords($order->author)}}</td>
                                    <td>{{$order->qty}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->delivered}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </section>        
    </div>
</div>
@include('admin.partials.footerscript')
   