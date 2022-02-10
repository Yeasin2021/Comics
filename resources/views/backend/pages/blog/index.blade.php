
@extends('backend.app')

@section('content')

<div class="card m-3">
        <div class="card-body">
            
           
            <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th data-sort-initial="true" data-toggle="true">#SN</th>
                        
                        <th data-hide="phone, tablet">Blog Title</th>
                        <th data-hide="phone, tablet">Description</th>
                        <th data-hide="phone, tablet">Visitors</th>
                        <th data-hide="phone, tablet">Image</th>
                        <th data-hide="phone, tablet">Type</th>
                        <th data-hide="phone, tablet">Status</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <div class="m-t-40">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <div class="form-group">
                                <a href="{{route('blog.form')}}"><button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New Blog
                                </button></a>
                                <small>New Blog will be added in last page.</small> </div>
                        </div>
                        <div class="ml-auto">
                            <div class="form-group">
                                <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <tbody>
                    @foreach($blog as $key=>$item)
                    <tr>
                        
                        <td>{{$key+1}}</td>
                        <td>{{$item->title}}</td>
                        <td>{!! $item->description !!}</td>
                        <td>{{$item->count}}</td>
                        <td><img src="{{$item->image}}" alt="blog-image" height="150px" width="150px"></td>
                        <td>{{$item->type}}</td>
                        <td class="text-center" style="width:30px">
                                @if($item->status == 1)
                                <span class="badge badge-success py-1" style="font-size:14px;">Published</span>  <a class="delete" href="{{route('blog.unpublished',$item->id)}}"><i style="font-size: 25px;" class="far fa-check-circle pl-2"></i></a>

                                    @else
                                   <span class="badge badge-warning py-1" style="font-size:14px;">Unublished</span>  <a class="delete" href="{{route('blog.published',$item->id)}}"><i style="font-size: 25px;" class="fas fa-times-circle pl-2 text-warning"></i></a>
                                @endif
                            </td>
                        <!-- <td><span class="label label-table label-success">Active</span> </td> -->
                        <td>
                            <a href="{{route('blog.edit',$item->id)}}"><i class="fas fa-marker" style="font-size:20px;"></i></a>
                            <a href="{{route('blog.delete',$item->id)}}"><i class="fas fa-trash-alt" style="color: red; font-size:20px;"></i></a>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="text-right">
                                <ul class="pagination">
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    

@endsection

@push('js')
<!-- <script src="{{asset('admins/assets/plugins/footable/js/footable.all.min.js')}}"></script> -->
<script src="{{asset('admins/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script>
    
$(window).on('load', function() {

// Row Toggler
// -----------------------------------------------------------------
$('#demo-foo-row-toggler').footable();

// Accordion
// -----------------------------------------------------------------
$('#demo-foo-accordion').footable().on('footable_row_expanded', function(e) {
    $('#demo-foo-accordion tbody tr.footable-detail-show').not(e.row).each(function() {
        $('#demo-foo-accordion').data('footable').toggleDetail(this);
    });
});

// Pagination
// -----------------------------------------------------------------
$('#demo-foo-pagination').footable();
$('#demo-show-entries').change(function (e) {
    e.preventDefault();
    var pageSize = $(this).val();
    $('#demo-foo-pagination').data('page-size', pageSize);
    $('#demo-foo-pagination').trigger('footable_initialized');
});

// Filtering
// -----------------------------------------------------------------
var filtering = $('#demo-foo-filtering');
filtering.footable().on('footable_filtering', function (e) {
    var selected = $('#demo-foo-filter-status').find(':selected').val();
    e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
    e.clear = !e.filter;
});

// Filter status
$('#demo-foo-filter-status').change(function (e) {
    e.preventDefault();
    filtering.trigger('footable_filter', {filter: $(this).val()});
});

// Search input
$('#demo-foo-search').on('input', function (e) {
    e.preventDefault();
    filtering.trigger('footable_filter', {filter: $(this).val()});
});




// Search input
$('#demo-input-search2').on('input', function (e) {
    e.preventDefault();
    addrow.trigger('footable_filter', {filter: $(this).val()});
});

// Add & Remove Row
var addrow = $('#demo-foo-addrow');
addrow.footable().on('click', '.delete-row-btn', function() {

    //get the footable object
    var footable = addrow.data('footable');

    //get the row we are wanting to delete
    var row = $(this).parents('tr:first');

    //delete the row
    footable.removeRow(row);
});
var addrow = $('#demo-foo-addrow2');
addrow.footable().on('click', '.delete-row-btn', function() {

    //get the footable object
    var footable = addrow.data('footable');

    //get the row we are wanting to delete
    var row = $(this).parents('tr:first');

    //delete the row
    footable.removeRow(row);
});
// Add Row Button
$('#demo-btn-addrow').click(function() {

    //get the footable object
    var footable = addrow.data('footable');
    
    //build up the row we are wanting to add
    var newRow = '<tr><td>thome</td><td>Woldt</td><td>Airline Transport Pilot</td><td>3 Oct 2016</td><td><span class="label label-table label-success">Active</span></td><td><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button></td></tr>';

    //add it
    footable.appendRow(newRow);
});
});

</script>
@endpush