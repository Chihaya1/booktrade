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
        <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                <label>Category name:</label>
                <input type="text" class="form-control"  name="name">
                {{$errors->first('name')}}
            </div>
            <button type="submit" class="btn btn-dark">Add</button>
        </form><br>
    </div>
</div><br><br><br><br><br>
@include('admin.partials.footerscript')