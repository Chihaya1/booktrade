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
                <h3 class="ml-2" >Contact List</h3>
                <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->first_name }}</td>
                                <td>{{ $contact->last_name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone_number }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <a  class="btn btn-secondary mb-2" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Are you sure?')" action="{{route('contacts.destroy',$contact->id)}}" method="post">
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