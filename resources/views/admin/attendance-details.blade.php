@extends('admin.layout.admin')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
           
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Attendance Details</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $key=> $log)
                                    <tr>
                                        <td>{!! $key+1 !!}</td>
                                        <td>{!! $log->date !!}</td>
                                        <td>{!! $log->start_time !!}</td>
                                        <td>{!! $log->end_time !!}</td>
                                        <td>{!! $log->description !!}</td>
                                    </tr>    
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Description</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // { extend: 'copy'},
                // {extend: 'csv'},
                // {extend: 'excel', title: 'ExampleFile'},
                // {extend: 'pdf', title: 'ExampleFile'},

                // {extend: 'print',
                //     customize: function (win){
                //         $(win.document.body).addClass('white-bg');
                //         $(win.document.body).css('font-size', '10px');

                //         $(win.document.body).find('table')
                //         .addClass('compact')
                //         .css('font-size', 'inherit');
                //     }
                // }
            ]
        });

    
    });
    
</script>
@endsection