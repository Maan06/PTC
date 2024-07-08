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
        width: 100% ;
        max-width: 353px !important;
    }

    .dt-buttons {
        float: left !important;
        padding-bottom: 10px;
    }
    .select2-container .select2-container--default .select2-container--open{
        position: absolute;
        top: -121.359px;
        left: 1371px;
        max-width: 340px !important;
    }
    .select2-dropdown .select2-dropdown--above{
        max-width: 340px !important;
        width: auto;
        position: relative;
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
  <!-- add post job modal-->

  <div class="modal fade text-left" id="postjob-modal" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="float-left">Add Job Post</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form method="post" id="postjob-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="post_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label" for="job_title"> Job Title <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control " id="job_title" name="job_title" placeholder="Enter Job Title" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Job Type <span class="text-danger">*</span></label>
                                <select data-placeholder="Select Job Type *" id="job_type" name="job_type[]" class="form-control select2" multiple required>
                                    <option value=""></option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Internship">Internship</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Job Location <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="job_location" name="job_location" placeholder="Enter Job Location" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success ml-1" id="submit-job-btn">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--end add post job modal -->
