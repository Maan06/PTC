<?php
$auth = auth()->user()->role;
$auth_path = auth()->user()->role == 'Admin' ? '/admin' : '';
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Post Job - Admin</title>
@include('layouts.header')
<style type="text/css">
    .dataTables_wrapper .dataTables_length {
        float: none !important;
    }

    table.picker__table td {
        padding: 0 !important;
        font-size: 12px;
    }

    .has-icon-left .form-control {
        padding-left: 0.5rem !important;
    }

    table th {
        font-size: 10px !important;
        padding: 10px !important;
    }

    table tbody td {
        font-size: 11px !important;
        padding: 10px !important;
    }

    .select2-container {
        width: 100% !important;
    }

    .dt-buttons {
        float: left !important;
        padding-bottom: 10px;
    }

    .picker .picker__day--highlighted,
    .picker .picker__day--infocus:hover,
    .picker .picker__day--outfocus:hover,
    .picker .picker__day--selected,
    .picker .picker__day--today {
        border-radius: 0 !important;
        text-align: center !important;
    }
</style>
<div class="app-content content mt-2">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section class="list-group-navigation">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="float-left">List of All PostJob</h6>
                                        <div class="float-right">
                                          <button type="button" id="add-job-btn" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Add New Job"><i class="bx bx-plus"></i> New Job</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr />
                                    </div>
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="PostjobTable" class="table " style="width: 100%;">
                                              <div id="success_message" ></div>
                                                <thead>
                                                    <tr>
                                                        <th>Job Title</th>
                                                        <th>Job Type</th>
                                                        <th>Location</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->



{{-- end edit model --}}

@include('modal.postjob-modal')
@include('layouts.footer')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
<script>
$(document).ready( function () {

    $("#add-job-btn").on("click", function(event) {
      event.preventDefault();
      $("#postjob-modal").modal("show");
    });

    $("#postjob-modal").on('hide.bs.modal', function(){
        $('#job_title').val('');
        $('#job_type').val('').trigger('change');
        $('#job_location').val('');
        $('#post_id').val('');
    });

    $(document).on("click", ".edit-btn", function() {
        let id = $(this).data('value');
        $('#post_id').val($(this).data('value'));
        $.ajax({
          type: 'GET',
          url: "{{ route('admin.job.getData') }}",
          data: {'id':id},
          success: function(data) {
            if (data.status) {
                let value = data.data;
                let job_type = value.job_type;
                let split = job_type.split(',');
                $('#job_title').val(value.job_title);
                $('#job_type').val(split).trigger('change');
                $('#job_location').val(value.location);
            }
          }
        }); 
        $("#postjob-modal").modal("show");
    });
        
    $(document).on('click', '#submit-job-btn', function(){
        var formData = new FormData($('#postjob-form')[0]);
        $.ajax({
          type: 'POST',
          url: "{{ route('admin.save.job_post') }}",
          data: formData,
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $("#submit-job-btn").prop('disabled', true);
          },
          success: function(data) {
            // console.log(data);
            if (data.status) {
              Toast.fire({
                          icon: 'success',
                          title: data.message
                        })
              // location.reload();
              $('#postjob-modal').modal('hide');
              $('#PostjobTable').DataTable().ajax.reload();
            }
            else
            {
              Toast.fire({
                          icon: 'error',
                          title: data.message
                        })
              $("#submit-job-btn").prop('disabled', false);
            }
          }
        }); 
    });


var PostjobTable = $('#PostjobTable');
load_data();
function load_data()
{
    PostjobTable.DataTable({
        responsive: true,
        serverSide: true,
        processing: true,
        ordering: false,
        ajax: "{{route('admin.jobs.data')}}",
        "aoColumns": [
            {
                mData: 'job_title'
            },
            {
                mData: 'job_type'
            },
            {
                mData: 'location'
            },
            {
                mData: 'status'
            },
            {
                mData: 'action'
            },
        ],
        "columnDefs": [{
            targets: -1,
            className: 'text-right'
        }],
    });
}    


$(document).on('click', '.status-btn', function(e) {
        e.stopPropagation();
        // alert('You have to remove this alert & uncomment to use this function');
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');

        if (action == 'delete') {

          Swal.fire({
            title: 'You wont be able to retrive this!',
            showDenyButton: true,
            confirmButtonText: `Ok, Delete it.`,
            denyButtonText: `No, Cancel it.`,
          }).then((result) => {
            if (result.isConfirmed) {
              status_change(id, action);
            } 
          })
        }else{
          status_change(id, action);
        }
    });

    const status_change = (id = 0, action = 'enable') => {
      $.ajax({
              type: "post",
              url: "{{route('admin.job.status')}}",
              data: { 'id' :id , 'status': action, '_token' : '{{ csrf_token() }}' },
              success: function(result) {
                  if (result.error == true) {
                      Toast.fire({
                        icon: 'error',
                        title: result.message
                      })
                  }else{
                      Toast.fire({
                        icon: 'success',
                        title: result.message
                      })
                  }
                  $('#PostjobTable').DataTable().ajax.reload();
              }
          });
    }
        
});
</script>
    
