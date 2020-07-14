@include('admin.adminlayouts.includes.header')

<div class="row no-gutters">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">

                <ul class="list-group">
                    <li class="list-group-item active">Dashboard</li>
                        <li class="list-group-item">
                            <a href="{{route('books.create')}}">Add Books</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('books.index')}}">View all Books</a>

                        </li>
                        <li class="list-group-item">
                            <a href="{{route('categories.create')}}">Add Categories</a>

                        </li>
                        <li class="list-group-item">
                            <a href="{{route('categories.index')}}">View all Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('contacts.index')}}">View all Contacts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{url('admin/orders/pending')}}">Pending Orders</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{url('admin/orders/delivered')}}">Delivered Orders</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{url('admin/orders')}}">All Orders</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('deposits.index')}}">View all Deposits</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('donates.index')}}">View all Donates</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('sells.index')}}">View all Sales</a>
                        </li>
                        

                    <!-- Products -->
                        <li class="list-group-item">
                            <a href="#">Add new Users</a>
                        </li>
                </ul>

            </div>
        </div>

    </div> 
    <div class="col-md-9">
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
