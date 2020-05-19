@include('admin.partials.headerscript')
 @include('admin.partials.header') 
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
    </div>
    <div class="col-md-10">
        <h2>
           Edit Contacts
        </h2>
        <form action="{{route('contacts.update',$contact->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label>Firstname:</label>
                <input value="{{ $contact->first_name }}" type="text" class="form-control"  placeholder="Enter Firstname" name="first_name">
                {{$errors->first('first_name')}}
            </div>
            <div class="form-group col-md-6">
                <label>Lastname:</label>
                <input value="{{ $contact->last_name }}" type="text" class="form-control"  placeholder="Enter Lastname" name="last_name">
                {{$errors->first('last_name')}}
            </div>
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input  value="{{ $contact->email }}" type="text" class="form-control"  placeholder="Enter email" name="email">
                {{$errors->first('email')}}
            </div>
            <div class="form-group col-md-6">
                <label>Phone Number:</label>
                <input value="{{ $contact->phone_number }}" type="text" class="form-control"  placeholder="Enter Phone number" name="phone_number">
                {{$errors->first('phone_number')}}
            </div>
            <div class="form-group col-md-6">
                <label>Address:</label>
                <input value="{{ $contact->address }}" type="text" class="form-control"  placeholder="Enter Address" name="address">
                {{$errors->first('address')}}
            </div>
            <div class="form-group col-md-6">
                <label>Message:</label>
                <textarea type="text" class="form-control"  placeholder="Message" name="message" row ="5" >{{ $contact->message }}</textarea>
                {{$errors->first('message')}}
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form><br>
    </div>    
</div>
@include('admin.partials.footerscript')
    
    
   