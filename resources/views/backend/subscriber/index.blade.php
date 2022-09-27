

@extends('backend.app')

@push('css')
<style>
    .table > tbody > tr > td {
     vertical-align: middle;
}
</style>
@endpush

@section('title')
    Subscriber Index Page
@endsection


@section('content')
@include('backend.include.breadcrumb',['title' => 'Subscriber Page'])
<div class="row m-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="{{route('comics-category-form')}}"><button class="btn btn-primary">Add New</button></a></h4>
                               
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th data-sort-initial="true" data-toggle="true" class="text-center">#SN</th>
                        
                                                <th data-hide="phone, tablet"  class="text-center">Subscriber Name</th>
                                                
                                                
                                                <th data-hide="phone, tablet" class="text-center">Email</th>
                                                <th data-hide="phone, tablet" class="text-center">Subject</th>
                                                <th data-hide="phone, tablet" class="text-center">Message</th>
                                                <th data-sort-ignore="true" class="min-width text-center" >Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th data-sort-initial="true" data-toggle="true" class="text-center">#SN</th>
                        
                                                <th data-hide="phone, tablet"  class="text-center">Subscriber Name</th>
                                                
                                                
                                                <th data-hide="phone, tablet" class="text-center">Email</th>
                                                <th data-hide="phone, tablet" class="text-center">Subject</th>
                                                <th data-hide="phone, tablet" class="text-center">Message</th>
                                                <th data-sort-ignore="true" class="min-width text-center" >Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($data as $key=>$item)
                                            <tr>
                                                <td class="text-center">{{$key+1}}</td>
                                                
                                                <td class="text-center">{{$item->subscriber_name}}</td>
                                                <td class="text-center">{{$item->subscriber_email}}</td>
                                                <td class="text-center">{{$item->subject}}</td>
                                                <td class="text-center">{{$item->message}}</td>
                                                
                                                
                                                
                                                
                                                {{-- <td class="text-center">
                                                        @if($item->status == 1)
                                                        <span class="badge badge-success py-1" style="font-size:14px;">Published</span>  <a class="delete" href="{{route('comics-category-unpublished',$item->id)}}"><i style="font-size: 25px;" class="far fa-check-circle pl-2"></i></a>

                                                            @else
                                                        <span class="badge badge-warning py-1" style="font-size:14px;">Unublished</span>  <a class="delete" href="{{route('comics-category-published',$item->id)}}"><i style="font-size: 25px;" class="fas fa-times-circle pl-2 text-warning"></i></a>
                                                        @endif
                                                    </td> --}}
                                                
                                                <td class="text-center">
                                                    <a href="{{route('comics-category-edit',$item->id)}}"><i class="mdi mdi-gmail" style="font-size:20px;"></i></a>
                                                    <a href="{{route('comics-category-delete',$item->id)}}"><i class="fas fa-trash-alt" style="color: red; font-size:20px;"></i></a>
                                                    <a href="{{route('comics-category-delete',$item->id)}}"><i class="fas fa-eye" style="color: green; font-size:20px;"></i></a>
                                                    
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
           
        ]
    });
    </script>
    
@endpush