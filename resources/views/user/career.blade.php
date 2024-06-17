   
@include('user.layouts.header')

  <!-- header ends -->
    <!-- career banner starts -->
    <section class="career-banner">       
            <div class="d-flex justify-content-center align-items-center w-100 h-100">                
                    <h1 class="text-white text-uppercase fw-bold">career</h1>    
            </div>       
    </section>
    <!-- career banner ends -->

    <!-- job description starts -->
    <section class="py-5 bg-body-tertiary">
        <div class="container-lg">
            <div class="text-center">
                <h2 class="fw-semibold">Open Job Positions</h2>
                <p>Get the fastest application so that your name is above other application</p>
            </div>
            <div>
                <form class="job-form">
                    <div class="career-top-heading px-3">
                        <div class="col-11 col-sm-5 py-2">         
                            <span><i class="fa-solid fa-magnifying-glass text-secondary px-1"></i></span>
                            <input type="text" id="job_search" placeholder="Job Search" class="border-end">                   
                        </div>
                        <div class="col-11 col-sm-5 py-2">
                            <span><i class="fa-solid fa-location-dot text-secondary px-1"></i></span>
                            <input type="text" id="location" placeholder="Location">
                        </div>
                        <div class="col-11 col-sm-2 py-2">
                            <button class="btn g-active py-1 search-btn text-capitalize">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <div>
                <div class="d-flex flex-wrap mt-5">
                @if(isset($posts[0]))   
                  @foreach($posts as $post) 
                    <div class="col-12 p-2">
                        <div class="h-100 py-4 px-3 rounded-4 bg-white">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="col-sm-4 col-6 ps-2 order-0 order-sm-0">
                                    <h4 class="fw-semibold text-uppercase main-color">{{$post->job_title}}</h4>
                                    <p class=" text-secondary text-capitalize"><i class="fa-solid fa-location-dot me-2">
                                        </i>{{$post->location}}</p>
                                </div>
                                <div class="col-sm-6 col-12 d-flex flex-wrap order-2 order-sm-1" style="font-size: 10px;">
                                    @php
                                        $job_types = explode(',', $post->job_type);
                                    @endphp
                                    @if(isset($job_types[0]))
                                        @foreach($job_types as $job_type)
                                            <p style="height: fit-content; width: fit-content;"
                                            class="fw-semibold px-3 py-1 rounded-5 text-uppercase border 
                                            border-1 border-secondary text-center me-2 col-sm-4 col-5 col-md-3">{{$job_type}}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="col-sm-2 col-6 order-1 order-sm-2 text-end">
                                    <button type="button" data-value="{{$post->id}}" data-title="{{$post->job_title}}" class="apply-modal-btn btn rounded-5 px-4 py-1">Apply</button>
                                    <br>
                                    <span class="main-color pe-2" style="font-size: 13px;">{{$post->created_at}}</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>   
                  @endforeach
                @endif    

                </div>
                <div class="text-center">
                    <button class="g-active btn mt-4 px-3 py-1 text-capitalize">View All Openings</button>
                </div>
            </div>
        </div>
    </section>
    <!-- job description ends -->  

@include('user.layouts.footer')

<script>

    $(document).on('click', '.apply-modal-btn', function(){
        let value = $(this).data('value');
        let job_title = $(this).data('title');
        $('#job_title').val(job_title);
        $('#job_id').val(value);
        $('#applyform').modal('show');
    });

    $("#applyform").on('hide.bs.modal', function(){
        $('#job_title').val('');
        $('#job_id').val('');
        $('#job_description').val('');
        $('#fname').val('');
        $('#email').val('');
        $('#contact').val('');
        $('#formFile').val('');
        $("#applyButton").prop('disabled', false);
    });

    $(document).on('click', '#applyButton', function(){
        var formData = new FormData($('#jobApplyForm')[0]);
        $.ajax({
          type: 'POST',
          url: "{{ route('job_apply') }}",
          data: formData,
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $("#applyButton").prop('disabled', true);
          },
          success: function(data) {
            // console.log(data);
            if (data.status) {
              toastr.success(data.message, '', {
                closeButton: !0,
                tapToDismiss: !1,
                progressBar: true,
                timeOut: 1000
              });
              location.reload();
            }
            else
            {
              toastr.error(data.message, '', {
                closeButton: !0,
                tapToDismiss: !1,
                progressBar: true,
                timeOut: 1000
              });
              $("#applyButton").prop('disabled', false);
            }
          }
        }); 
    });

    $(document).on('click', '.search-btn', function(e){
        e.preventDefault();
        var createUrl = "";
        if($('#job_search').val())
        {
            createUrl += '?job_search='+$('#job_search').val();
        }
        else
        {
            createUrl += '?job_search=All';
        }
        if($('#location').val())
        {
            createUrl += '&location='+$('#location').val();
        }
        else
        {
            createUrl += '&location=All';
        }
        window.location.replace(createUrl); 
    });
</script>
   