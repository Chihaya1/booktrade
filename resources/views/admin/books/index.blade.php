<!-- form bata ako data dekhaune page -->
@include('admin.partials.headerscript')
@include('admin.partials.sidebar')
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
           
        </div>
</div>
@include('admin.partials.footerscript')