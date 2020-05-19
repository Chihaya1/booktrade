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
                <h3 class="ml-2" >Deposit List</h3>
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Condition</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($deposits as $deposit)
                            <tr>
                                <td>{{ $deposit->email }}</td>
                                <td>{{ $deposit->title }}</td>
                                <td>{{ $deposit->author }}</td>
                                <td>{{ $deposit->price }}</td>
                                <td>{{ $deposit->condition }}</td>
                                <td>
                                    <img src="/images/{{ $deposit->image }}" class="img-fluid" alt="book">
                                </td>
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('deposits.edit',$deposit->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Are you sure?')"action="{{route('deposits.destroy',$deposit->id)}}" method="post">
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