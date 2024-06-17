<!-- edit post job modal -->

<div class="modal fade text-left" id="editpostjob" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="float-left">Edit PostJob Details</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>

            <form id="editpostjob" method="POST" action="{{route('updatepostjob')}}" enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="id" id="edit_id">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Company id <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-inr'></i></span>
                                    </div>
                                    <input type="text" class="form-control numberOnly" value=""
                                        id="edit_company_id" name="company_id" placeholder="Enter Company Id"
                                        value="0" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Company Image</label>
                              
                                <div class="company-file">
                                    <input type="file" value="" accept=".jpg, .png, .jpeg"
                                        class="company-file-input" name="company_profile" id="edit_company_profile">
                                    {{-- <label class="company-file-label" for="company_profile">Choose file</label> --}}
                                </div>
                                <div id="uploaded-company-image"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label" for="company_name"> Company Name <span
                                        class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-inr'></i></span>
                                    </div>
                                    <input type="text" class="form-control " id="edit_company_name"
                                        name="company_name" placeholder="Enter Comapny Name" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Job Type <span class="text-danger">*</span></label>
                                <select data-placeholder="Select Job Type *" id="edit_job_type" name="job_type"
                                    class="form-control select2" required>
                                    <option value="">--Select--</option>
                                    <option value="fulltime">Full Time</option>
                                    <option value="parttime">Part Time</option>
                                    <option value="onsite">On Site</option>
                                    <option value="workfromhome">Work From Home</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group position-relative has-icon-left">
                                <label class="form-control-label">Jobpost Date<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="date" class="form-control " value=""
                                        name="no_of_days_posted_ago" id="edit_no_of_days_posted_ago"
                                        placeholder="Choose date *" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Job Role <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-inr'></i></span>
                                    </div>
                                    <input type="text" value="" class="form-control" id="edit_job_role"
                                        name="job_role" placeholder="Enter Job Role " required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">Company Aadress <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-inr'></i></span>
                                    </div>
                                    <input type="text" value="" class="form-control"
                                        id="edit_company_address" name="company_address"
                                        placeholder="Enter Comapny Address" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-control-label">website </label>
                                <select data-placeholder="Select Job Type *" id="edit_website" name="website"
                                    class="form-control select2">
                                    <option value="">--Select--</option>
                                    <option value="inext">I-Next</option>
                                    <option value="ratmala">Ratmala</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success ml-1 update-btn" id="update-job-btn">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Update</span>
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

{{-- end of edit modal --}}
