@include('admin.partials.headerscript')
@include('admin.partials.sidebar')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
    </div>
    <div class="col-md-10">
        <h2>Edit Orders</h2>
        <div class="content">
            <p>Please fill the details.</p> 
        </div>
        <form action="{{route('orders.update',$order->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label>Book Name:</label>
                <input value="{{ $order->title }}" type="name" class="form-control" name="title">
                {{$errors->first('title')}}
            </div>
            <div class="form-group col-md-6">
                <label>First Name:</label>
                <input value="{{ $order->first_name }}" type="name" class="form-control" name="first_name">
                {{$errors->first('first_name')}}
            </div>
            <div class="form-group col-md-6">
                <label>Last Name:</label>
                <input value="{{ $order->last_name }}" type="name" class="form-control" name="last_name">
                {{$errors->first('last_name')}}
            </div>
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input value="{{ $order->email }}" type="email" class="form-control" name="email">
                {{$errors->first('email')}}
            </div>
            <div class="form-group col-md-6">
                <label>Phone number:</label>
                <input value="{{ $order->phone_number }}" type="text" class="form-control" name="phone_number">
                {{$errors->first('phone_number')}}
            </div>
            <div class="form-group col-md-6">
                <label>Address:</label>
                <input value="{{ $order->address }}" type="address" class="form-control" name="address">
                {{$errors->first('address')}}
            </div>
            <div class="form-group col-md-6">
                <label>Quantity:</label>
                <input value="{{ $order->quantity }}" type="text" class="form-control" name="quantity">
                {{$errors->first('quantity')}}
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>
</div>
    @include('admin.partials.footerscript')
  
            