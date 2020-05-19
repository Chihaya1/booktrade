@include('admin.partials.headerscript')
@include('admin.partials.sidebar')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
    </div>
    <div class="col-md-10">
        <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                </div>
                @endif
        </div>
        <div class="container mt-4">
            <table class="table table-bordered table-hover table-reponsive">
                <h3 class="ml-2" >Order List</h3>
                <thead>
                <tr>
                    <th>Book name</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Quantity</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->title }}</td>
                                <td>{{ $order->first_name }}</td>
                                <td>{{ $order->last_name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('orders.edit',$order->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Are you sure?')"action="{{route('orders.destroy',$order->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type= "submit" value="Delete" class="btn btn-danger">
                                   </form>
                                </td>
                            </tr>
                        @endforeach
                    </form>
                </tbody>
            </table> 
        </div>
    </div>
</div>
@include('admin.partials.footerscript')