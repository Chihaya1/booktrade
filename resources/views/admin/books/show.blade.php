<!-- form bata ako data dekhaune page -->
@include('admin.partials.headerscript')
@include('admin.partials.header')
<div class="row no-gutters">
		<div class="col-md-2">
            @include('admin.partials.nav')
        </div>
        <div class="col-md-10">
        	<div class="row mt-5">
        		<div class="col-md-2">
        			<img src="/images/{{ $book->image }}"  class="img-fluid ml-5" height:700px; width:800;>
        		</div>
        		<div class="col-md-10 ">

        			<h2 class="ml-5">{{$book->name}}</h2><!-- title -->
        			<h6 class="ml-5 text-primary">{{$book->author}}</h6><!-- Author -->
        			<h6 class="ml-5">{{$book->category->name}}</h6>
        			<div class="mr-5">
        			    <p class="ml-5 text-justify mr-5 mt-5">{{$book->description}}</p>
                    </div>      
				</div>	
				
        	</div>
			
        </div>
		
</div>
@include('admin.partials.footerscript')