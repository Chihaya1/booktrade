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
                <h3 class="ml-2" >Donation List</h3>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Condition</th>
                    <th>Author</th>
                    <th>Phone Number</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($donates as $donate)
                            <tr>
                                <td>{{ $donate->title }}</td>
                                <td>{{ $donate->email }}</td>
                                <td>{{ $donate->category }}</td>
                                <td>{{ $donate->condition }}</td>
                                <td>{{ $donate->author }}</td>
                                <td>{{ $donate->phone_number }}</td>
                                <td>{{ $donate->description }}</td>
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('donates.edit',$donate->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Are you sure?')"action="{{route('donates.destroy',$donate->id)}}" method="post">
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