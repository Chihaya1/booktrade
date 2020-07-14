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
                <h3 class="ml-2" >Sells List</h3>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Condition</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($sells as $sell)
                            <tr>
                                <td>{{ $sell->name }}</td>
                                <td>{{ $sell->email }}</td>
                                <td>{{ $sell->category}}</td>
                                <td>{{ $sell->author }}</td>
                                <td>{{ $sell->price }}</td>
                                <td>{{ $sell->condition }}</td>
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('sells.edit',$sell->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Are you sure?')"action="{{route('sells.destroy',$sell->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type= "submit" value="Delete" class="btn btn-danger">
                                   </form>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table> 
        </div>
    </div>
</div>
@include('admin.partials.footerscript')