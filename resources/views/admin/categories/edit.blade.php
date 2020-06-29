@include('admin.partials.headerscript')
@include('admin.partials.sidebar')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
    </div>
    <div class="col-md-10">
        <div class="card-body col-md-6">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                </div>
                @endif
        </div>
        <form action="{{route('categories.update',$category->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label>Category name:</label>
                <input value="{{ $category->name}}" class="form-control"  name="name">
            </div>
            <button type="submit" class="btn btn-dark">Add</button>
        </form><br>
    </div>
</div>
@include('admin.partials.footerscript')