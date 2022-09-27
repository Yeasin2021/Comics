
@extends('backend.app')

@section('title')
    Admin's Slider Index Table  Page
@endsection


@push('css')
<style>
    .table > tbody > tr > td {
     vertical-align: middle;
}
</style>
@endpush
@section('content')
@include('backend.include.breadcrumb',['title' => 'Slider Index Table  Page'])
<div class="row m-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="{{route('slider.content.form')}}"><button class="btn btn-primary">Add New</button></a></h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Designation One</th>
                                                <th>Designation Two</th>
                                                <th>Designation Three</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Designation One</th>
                                                <th>Designation Two</th>
                                                <th>Designation Three</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($data as $key=>$item)
                                            <tr>
                                                <td class="align-middle">{{$key+1}}</td>
                                                <td class="align-middle">{{$item->name}}</td>
                                                <td class="align-middle">{{$item->designation_one}}</td>
                                                <td class="align-middle">{{$item->designation_two}}</td>
                                                <td class="align-middle">{{$item->designation_three}}</td>
                                                <td class="align-middle"><img src="{{$item->image}}" alt="image" height="100px" width="100px" class="img-fluid"></td>
                                                <td><a href="{{route('slider.content.edit',\Crypt::encrypt($item->id))}}"><i class="fas fa-edit" style="font-size: 2em; color:Mediumslateblue"></i></a>
                                                    <a href="{{route('slider.content.delete',$item->id)}}"><i class="fas fa-trash-alt" style="font-size: 2em; color:Tomato"></i></a>
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