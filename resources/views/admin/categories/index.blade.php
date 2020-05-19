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
                <h3 class="ml-2" >List of  Categories</h3>
                <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                    <form action="{{route('categories.index')}}" method="post">
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>

                                <td>
                                    <img src="/images/{{ $category->image }}" class="img-fluid" alt="">
                                </td>
                           
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('categories.edit',$category->id) }}">Edit</a><br>
                                    <form onsubmit="return confirm('Are you sure?')"action="{{route('categories.destroy',$category->id)}}" method="post">
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
