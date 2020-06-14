@include('admin.partials.headerscript')
@include('admin.partials.header')
<!-- navigation -->
<div class="row no-gutters">
    <div class="col-md-2">
        @include('admin.partials.nav')
        <div>
            <label><b>Condition of Book</b></label>
                <select class="form-control" id="">
                    <option>First Hand</option>
                    <option>Second Hand</option>
                </select>
            </div><br><br>
            <div>
                <label><b>Default Sorting</b></label>
                    <select class="form-control" id="">
                                <option>Sort By Latest</option>
                                <option>Sort By Popularity</option>
                    </select>
            </div>
        </div>
        <div class="col-md-10">
            <section class="book-img container">
            <?php $categories_name = DB::table('categories')->select('name')->where('id',$id)->get();?>
                <h4>
                    Category:
                    @foreach($categories_name as $category_name)
                        {{$category_name->name}}
                    @endforeach
                </h4>
                <div class="row">
                <!-- listing categories for school -->
                   @foreach($category_books as $book)
                   <div class="col-md-3 pt-4 book-1 ">
                         <a href="{{ route('books.show',$book->id)}}"><img src="/images/{{ $book->image }}" class="img-fluid" alt="book"></a>
                        <ul>
                            <div>{{$book->title}}</div>
                            <div>NRs.{{$book->price}}</div>


                        </ul>

            </div>
                   @endforeach
                </div>
            </section>
        </div>
</div>
@include('admin.partials.footerscript')