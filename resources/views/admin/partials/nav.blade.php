<nav class="nav">
	<div class="block-title">
		<h1> Categories</h1>
		<!-- <i class="fa fa-bars"></i> -->
	</div>
	<div class="booklists">
		<ul>
		<?php $categories = DB::table('categories')->get();?>
			@foreach($categories as $category)
				<li>
					<a href="{{url('bookscategory',$category->id)}}">{{$category->name}}</a>
				</li><br>
			@endforeach

		</ul>
	</div>
</nav>
		