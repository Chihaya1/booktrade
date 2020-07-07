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