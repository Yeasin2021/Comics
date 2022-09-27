
{{-- @extends('backend.app')
@push('css')


    
@endpush
@section('content')

<div class="card m-3">
        <div class="card-body">
            
           
            <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle text-center" data-page-size="7">
                <thead>
                    <tr>
                        <th data-sort-initial="true" data-toggle="true" style="width:20px;" class="text-center">#SN</th>
                        
                        <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Title</th>
                        <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Type</th>
                        <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Link</th>
                        
                        
                        <th data-hide="phone, tablet" style="width:100px;" class="text-center">Author</th>
                        <th data-hide="phone, tablet" style="width:100px;" class="text-center">Description</th>
                        <th data-hide="phone, tablet" style="width:100px;" class="text-center">Visitor</th>
                        
                        <th data-hide="phone, tablet" class="text-center">Status</th>
                        <th data-sort-ignore="true" class="min-width text-center" style="width:50px;" >Action</th>
                    </tr>
                </thead>
                <div class="m-t-40">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <div class="form-group">
                                <a href="{{route('comics')}}"><button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New Comics
                                </button></a>
                                <small>New Comics will be added in last page.</small> </div>
                        </div>
                        <div class="ml-auto">
                            <div class="form-group">
                                <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <tbody>
                    @foreach($comics as $key=>$item)
                    <tr>
                        
                        <td>{{$key+1}}</td>
                        <td>{{$item->comics_title}}</td>
                        <td>{{$item->comics_category}}</td>
                        <td>{{$item->comics_link}}</td>
                        <td>{{$item->comics_author}}</td>
                        <td>{!! \Illuminate\Support\Str::limit($item->comics_description, 10, '') !!}
                                     @if (strlen($item->comics_description) > 10)
                                     <span id="dots">...</span>
                                     <a style="text-decoration: none;" href="{{ route('comics-view',$item->id) }}">See More</a>
                                    @endif
                        </td>
                         
                        <td>{{$item->visitor}}</td>
                        
                        
                        
                        <td class="text-center" style="width:30px">
                                @if($item->status == 1)
                                <span class="badge badge-success py-1" style="font-size:14px;">Published</span>  <a class="delete" href="{{route('comics-unpublished',$item->id)}}"><i style="font-size: 25px;" class="far fa-check-circle pl-2"></i></a>

                                    @else
                                   <span class="badge badge-warning py-1" style="font-size:14px;">Unublished</span>  <a class="delete" href="{{route('comics-published',$item->id)}}"><i style="font-size: 25px;" class="fas fa-times-circle pl-2 text-warning"></i></a>
                                @endif
                            </td>
                        
                        <td>
                            <a href="{{route('comics-edit',$item->id)}}"><i class="fas fa-marker" style="font-size:20px;"></i></a>
                            <a href="{{route('comics-delete',$item->id)}}"><i class="fas fa-trash-alt" style="color: red; font-size:20px;"></i></a>
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

<script src="{{asset('admins/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script>
    
$(window).on('load', function() {


// -----------------------------------------------------------------
$('#demo-foo-row-toggler').footable();



$('#demo-foo-accordion').footable().on('footable_row_expanded', function(e) {
    $('#demo-foo-accordion tbody tr.footable-detail-show').not(e.row).each(function() {
        $('#demo-foo-accordion').data('footable').toggleDetail(this);
    });
});


$('#demo-foo-pagination').footable();
$('#demo-show-entries').change(function (e) {
    e.preventDefault();
    var pageSize = $(this).val();
    $('#demo-foo-pagination').data('page-size', pageSize);
    $('#demo-foo-pagination').trigger('footable_initialized');
});


var filtering = $('#demo-foo-filtering');
filtering.footable().on('footable_filtering', function (e) {
    var selected = $('#demo-foo-filter-status').find(':selected').val();
    e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
    e.clear = !e.filter;
});


$('#demo-foo-filter-status').change(function (e) {
    e.preventDefault();
    filtering.trigger('footable_filter', {filter: $(this).val()});
});


$('#demo-foo-search').on('input', function (e) {
    e.preventDefault();
    filtering.trigger('footable_filter', {filter: $(this).val()});
});





$('#demo-input-search2').on('input', function (e) {
    e.preventDefault();
    addrow.trigger('footable_filter', {filter: $(this).val()});
});


var addrow = $('#demo-foo-addrow');
addrow.footable().on('click', '.delete-row-btn', function() {

    
    var footable = addrow.data('footable');

    
    var row = $(this).parents('tr:first');

    
    footable.removeRow(row);
});
var addrow = $('#demo-foo-addrow2');
addrow.footable().on('click', '.delete-row-btn', function() {

    
    var footable = addrow.data('footable');

    
    var row = $(this).parents('tr:first');

    
    footable.removeRow(row);
});

$('#demo-btn-addrow').click(function() {

    
    var footable = addrow.data('footable');
    
   
    var newRow = '<tr><td>thome</td><td>Woldt</td><td>Airline Transport Pilot</td><td>3 Oct 2016</td><td><span class="label label-table label-success">Active</span></td><td><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button></td></tr>';

    
    footable.appendRow(newRow);
});
});

</script>
@endpush --}}




@extends('backend.app')

@section('title')
    Admin's Comics Index  Page
@endsection


@push('css')
<style>
    .table > tbody > tr > td {
     vertical-align: middle;
}
</style>
@endpush
@section('content')
@include('backend.include.breadcrumb',['title' => 'Comics Index  Page'])
<div class="row m-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="{{route('comics')}}"><button class="btn btn-primary">Add Comics</button></a><a href="{{route('comics-category-index')}}"><button class="btn btn-primary ml-2">Comics Category</button></a></h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                               <th data-sort-initial="true" data-toggle="true" style="width:20px;" class="text-center">#SN</th>
                        
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Title</th>
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Type</th>
                                                {{-- <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Link</th> --}}
                                                
                                                
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Author</th>
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Description</th>
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Visitor</th>
                                                
                                                <th data-hide="phone, tablet" class="text-center">Status</th>
                                                <th data-sort-ignore="true" class="min-width text-center" style="width:50px;" >Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th data-sort-initial="true" data-toggle="true" style="width:20px;" class="text-center">#SN</th>
                        
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Title</th>
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Type</th>
                                                {{-- <th data-hide="phone, tablet" style="width:100px;" class="text-center">Comics Link</th> --}}
                                                
                                                
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Author</th>
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Description</th>
                                                <th data-hide="phone, tablet" style="width:100px;" class="text-center">Visitor</th>
                                                
                                                <th data-hide="phone, tablet" class="text-center">Status</th>
                                                <th data-sort-ignore="true" class="min-width text-center" style="width:50px;" >Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($comics as $key=>$item)
                                            <tr class="text-center">
                                                <td style="width:100px;">{{$key+1}}</td>
                                                <td>{{$item->comics_title}}</td>
                                                <td>{{$item->comics_category->comics_category}}</td>
                                                {{-- <td>{{$item->comics_link}}</td> --}}
                                                <td>{{$item->comics_author}}</td>
                                                <td>{!! \Illuminate\Support\Str::limit($item->comics_description, 10, '') !!}
                                                            @if (strlen($item->comics_description) > 10)
                                                            <span id="dots">...</span>
                                                            <a style="text-decoration: none;" href="{{ route('comics-view',$item->id) }}">See More</a>
                                                            @endif
                                                </td>
                                                
                                                <td>{{$item->visitor}}</td>
                                                
                                                
                                                
                                                <td class="text-center" style="width:30px">
                                                        @if($item->status == 1)
                                                        <span class="badge badge-success py-1" style="font-size:14px;">Published</span>  <a class="delete" href="{{route('comics-unpublished',$item->id)}}"><i style="font-size: 25px;" class="far fa-check-circle pl-2"></i></a>

                                                            @else
                                                        <span class="badge badge-warning py-1" style="font-size:14px;">Unublished</span>  <a class="delete" href="{{route('comics-published',$item->id)}}"><i style="font-size: 25px;" class="fas fa-times-circle pl-2 text-warning"></i></a>
                                                        @endif
                                                    </td>
                                                
                                                <td>
                                                    <a href="{{route('comics-edit',$item->id)}}"><i class="fas fa-marker" style="font-size:20px;"></i></a>
                                                    <a href="{{route('comics-delete',$item->id)}}"><i class="fas fa-trash-alt" style="color: red; font-size:20px;"></i></a>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
@endsection

@push('js')
  <!-- This is data table -->
  <script src="{{asset('admins/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    
@endpush