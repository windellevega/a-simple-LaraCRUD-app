<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li id="dashboard"><a href="{{ url('/') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <li id="tables"><a href="{{ route('record-list') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> View Records</a></li>
        <li id="forms"><a href="{{ route('record-add') }}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Add Record</a></li>
        <li role="presentation" class="divider"></li>
    </ul>

</div>