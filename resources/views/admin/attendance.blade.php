@extends('admin.layout.admin')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <span class="status">{!! Auth::user()->status == 1 ? 'OUT' : 'IN' !!} </span>
                <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" id="example1" @if(Auth::user()->status == 1) checked="" @endif>
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                {{-- <input type="checkbox" name="active" value="active" @if(Auth::user()->status == 1) checked="" @endif id="active"> --}}
            </div>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Attendance</h5>
                    
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Hours</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $key=> $log)
                                    <tr>
                                        <td>{!! $key+1 !!}</td>
                                        <td>{!! $log->date !!}</td>
                                        <td>{!! number_format((float)($log->total/60), 2, '.', ''); !!}</td>
                                        <td><a href="{!! route('log-details',$log->date) !!}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                                    </tr>    
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
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

<!-- Modal -->
<div class="modal fade" id="outModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <input type="hidden" name="log_id" id="log_id" value="{!! Auth::user()->status == 1 ? Auth::user()->logs->last()->id : '' !!}">
          <div class="form-group">
            <label for="description" class="col-form-label">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="log-save">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="footer">
    <div class="float-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2018
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

           $('#example1').change(function() {

               if($(this).is(":checked")) {
                
                $.ajax({
                    url:'{!! route("in-logtime") !!}',
                    type:'post',
                    data:{"_token": "{{ csrf_token() }}"},
                    success:function(response){
                        $('#log_id').val(response);
                        $('.status').html('OUT');
                    }
                })
               }
               else{
                $('#outModal').modal('show');
               }
           });
    });
    $(document).on('click','#log-save',function(e){
        e.preventDefault();
        var description = $('#description').val();
        var log_id = $('#log_id').val();
        $.ajax({
            url:'{!! route("out-logtime") !!}',
            type:'post',
            data:{description:description,log_id:log_id , "_token": "{{ csrf_token() }}"},
            success:function(response){
                alert('success');
                $('#outModal').modal('hide');
                location.reload();

            }
        })
    })
</script>
@endsection