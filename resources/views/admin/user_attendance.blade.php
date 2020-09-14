@extends('admin.layout.admin')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
           
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>User Attendance</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <form method="post" action="{!! route('filter-user-attendance') !!}">
                            @csrf
                            <div class="form-group" id="data_1">
                                <label class="font-normal">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" name="start_date"  value="{!! isset($start_date) ? $start_date :  date('Y-m-d') !!}">
                                </div>
                            </div>
                            <div class="form-group" id="data_2">
                                <label class="font-normal">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" name="end_date"  value="{!! isset($end_date) ? $end_date :  date('Y-m-d') !!}">
                                </div>
                            </div>
                            <button class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Hours</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $key=> $log)
                                    <tr>
                                        <td>{!! $key+1 !!}</td>
                                        <td>{!! $log->user->name !!}</td>
                                        <td>{!! number_format((float)($log->total/60), 2, '.', ''); !!}</td>
                                        <td><a href="{!! url('adminp/attendance-details') !!}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                                    </tr>    
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Hours</th>
                                    <th>Options</th>
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
        var mem = $('#data_1 .input-group.date').datepicker({
                format:'yyyy-mm-dd',
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        var mem1 = $('#data_2 .input-group.date').datepicker({
                format:'yyyy-md-dd',
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
           
    });
    
</script>
@endsection