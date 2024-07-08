<!-- footer starts -->
    <footer style="background-color: #F6F6F6;">
        <div class="container-lg py-5">
            <div class="d-flex flex-wrap">
                <div class="col-md-3 col-sm-4 col-12 my-3">
                    <div><img src="{{asset('assets/images/logo-footer.png')}}" alt="" class="logo"></div>
                    <ul class="company-detail p-0 mt-4">
                        <li><a>Pilare Trading Company, India</a></li>
                        <li><a href="mailto:info@pilaretradingcompany.com">info@pilaretradingcompany.com</a></li>
                        <li><a href="tel:+917722979677" class="fw-bold">+91 77229-79677</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-6 my-3">

                    <ul class="p-0 w-50 mx-sm-auto">
                        <li class="mb-3"><a href="{{route('index')}}"
                                class="text-decoration-none text-black text-capitalize fs-5">Home</a></li>
                        <li class="mb-3"><a href="{{route('about')}}"
                                class="text-decoration-none text-black text-capitalize fs-5">About</a>
                        </li>
                        <li class="mb-3"><a href="{{route('services')}}"
                                class="text-decoration-none text-black text-capitalize fs-5">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-6 my-3">

                    <ul class="p-0 w-50 mx-sm-auto">
                        <li class="mb-3"><a href="{{route('products')}}"
                                class="text-decoration-none text-black text-capitalize fs-5">Products</a></li>
                        <li class="mb-3"><a href="{{route('career')}}"
                                class="text-decoration-none text-black text-capitalize fs-5">Career</a></li>
                        <li class="mb-3"><a href="{{route('contact_us')}}"
                                class="text-decoration-none text-black text-capitalize fs-5">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12 my-3">
                    <h2 class="fw-semibold text-capitalize mb-4">Get in touch
                        <br> with us
                    </h2>
                    <div>
                        <a class="text-uppercase bg-main-color rounded-5 text-white px-3 text-decoration-none py-2"
                            href="{{route('contact_us')}}">Contact
                            Us &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <ul class="p-0 footer-sc-icons d-flex mt-4">
                        <li>
                            <a href="https://www.facebook.com/people/Pilare-Trading-Company/61559142998770/?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook-f ms-0"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/pilaretradingcompany/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/pilaretradingcompany/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p class="fw-medium text-black text-capitalize m-0">Copyright &copy;2023 <a href="/"
                    class="main-color text-decoration-none">Pilare Trading Company</a>, All Rights reserved</p>
        </div>
    </footer>
    <!-- footer ends -->

    <!-- form modal open -->  
  <!-- Modal -->
  <div class="modal fade" id="applyform" tabindex="-1" aria-labelledby="applyformLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #F6F8FF;">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" class="job-apply px-3" id="jobApplyForm" enctype="multipart/form-data">
               @csrf
                <input type="hidden" name="job_id" id="job_id">
                <div class="row mb-3">
                    <input type="text" class="form-control rounded-4 border-0 px-3 py-2" id="job_title" placeholder="Job Title" aria-label="Full name" readonly required>
                </div>
                <div class="row mb-3">
                    <textarea  class="form-control rounded-4 border-0 px-3 py-2" name="job_description" id="job_description" placeholder="Job Description"></textarea>
                </div>
            
                <div class="row mb-3">
                    <input id="fname" type="text" name="full_name" class="form-control rounded-4 border-0 px-3 py-2" placeholder="Full Name" 
                    aria-label="Full name" required>
                </div>

                <div class="row mb-3">
                    <input id="email" type="email" name="email" class="form-control rounded-4 border-0 px-3 py-2" placeholder="Email Address" aria-label="Email" required>
                </div>
            
                <div class="row mb-3">
                    <input id="contact" type="number" name="contact" class="form-control rounded-4 border-0 px-3 py-2" placeholder="Contact" aria-label="Contact number" maxlength="10" required>
                </div>             
            
                <div class="row mb-3">
                    <input class="form-control" name="file" type="file" id="formFile" required>
                </div>
            
                <div class="row mb-3">
                    <button class="g-active w-100 btn text-capitalize" id="applyButton">Send</button>
                </div>
            </form>
            
        </div>       
      </div>
    </div>
  </div>
  <!-- form modal ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- flexslider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
    $('.discover-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1200: {
                items: 3
            }
        }

    })
    // Custom Button
    var owl = $('.discover-carousel');
    $('.customNextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    });
    $('.customPreviousBtn').click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $('.creative-process-carousel').owlCarousel({
        loop: true,
        margin: 10,
        // autoplay: true,
        // autoplayTimeout: 3000,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            800: {
                items: 3
            },
            1200: {
                items: 4
            }
        }

    })
    // Custom Button
    var owl = $('.creative-process-carousel');
    $('.customNextBtn2').click(function () {
        owl.trigger('next.owl.carousel');
    });
    $('.customPreviousBtn2').click(function () {
        owl.trigger('prev.owl.carousel');
    });

$(document).on('click', '#sendMessage', function(){
    var formData = new FormData($('.contact-form')[0]);
    $.ajax({
      type: 'POST',
      url: "{{ route('submit_contact_us') }}",
      data: formData,
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function() {
        $("#sendMessage").prop('disabled', true);
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
          $("#sendMessage").prop('disabled', false);
        }
      }
    }); 
});

const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

if(slider)
{
    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; //scroll-fast
      slider.scrollLeft = scrollLeft - walk;
      console.log(walk);
    });
}

</script>

</body>

</html>