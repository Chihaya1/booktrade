@include('admin.partials.headerscript')
<title>Profile</title>
@include('admin.partials.header')

<div class="row no-gutters">
    <div class="col-md-2">
        
    </div>
    <div class= "col-md-10" >
        <style>
            table td { padding:10px;}
        </style>
         <!-- <div class=""> -->
            <section><br>
                <div class="row">
                     <div class="col-md-4 well well-sm">
                        <div class="card border-secondary mb-3" style="max-width: 75%;">
                            <div class="card-header">Profile Menu</div>
                            <div class="card-body text-secondary">
                                @include('profile.menu')
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-8">
                        <ol class="breadcrumb">
                            <li><h3>Welcome <span style='color:blue'>{{Auth::user()->first_name}}</span></h3></li>
                            <table class="table table-bordered table-hover table-reponsive">
                                <tr>
                                    <td><a  href="{{url('/')}}/porders" class="btn btn-success">My Orders</a></td>
                                    <td><a href="{{url('/address')}}" class="btn btn-success">My Address</a></td>
                                    <td><a href="{{url('/password')}}" class="btn btn-success">Change Password</a></td>
                                </tr>
                            </table>
                        </ol>
                    </div>
                </div>
            </section>        
    </div>
</div>
@include('admin.partials.footerscript')
   