
@include('admin.adminlayouts.includes.header')
@include('admin.adminlayouts.includes.sidebar')
<div class="row no-gutters">
    <div class="col-md-4">
    
    </div>
    <div class="col-md-8">
        <div class="card-body">
        
            <h3>Orders</h3>
            <hr>
        </div>

        <ul>
            @foreach($orders as $order)
                <li>
                    <h4>Order by {{$order->user->first_name}} <br> Total Price {{$order->total}}</h4>

                    <form action="{{route('toggle.deliver',$order->id)}}" method="post" class="pull-right" id="deliver-toggle">
                        @csrf
                        <label for="delivered">Delivered</label>
                        <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                        <input type="submit" value="Submit">
                    </form>

                    <div class="clearfix"></div>
                    <hr>
                <div class="container mt-4">
                            <h5>Items</h5>
                            <table class="table table-bordered table-hover table-reponsive">
                                <tr>
                                    <th>Name</th>
                                    <th>qty</th>
                                    <th>price</th>
                                </tr>
                                @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->pivot->qty}}</td>
                                        <td>{{$item->pivot->total}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </li>
                    @endforeach
                </div>

        </ul>
    </div>
</div>
