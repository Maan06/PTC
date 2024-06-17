{{-- <!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>iNext</title> --}}
@include('user.layouts.header')

 <!-- header ends -->
    <!-- contact banner starts -->
    <section class="contact-banner">       
            <div class="d-flex justify-content-center align-items-center w-100 h-100">                
                    <h1 class="text-white text-uppercase fw-bold">Contact us</h1>    
            </div>       
    </section>
    <!-- contact banner ends -->

     <!-- contact us starts -->
     <section>
        <div class="container-lg">
            <div class="d-md-flex">                
                <div class="col-md-6 py-5">
                    <div>
                        <div>
                            <span
                                class="bg-secondary-color main-color text-capitalize px-2 rounded-5 py-1 fw-medium">contact us</span>
                            <h2 class="text-uppercase fw-bold mt-3">Get in <span class="main-color">touch today</span></h2>
                        </div>
                        <form  class="contact-form mt-4">
                            @csrf
                            <div>
                                <input name="company" pattern="[A-Za-z ]+" type="text" placeholder="Company" required>
                            </div>
                            <div>
                                <input name="name" pattern="[A-Za-z ]+" type="text" placeholder="Full Name" required>
                            </div>
                            <div>
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                            <div>
                                <input name="contact" maxlength="10" pattern="[0-9]{10}" type="number" placeholder="Contact Number" required>
                            </div>
                            <div>
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="g-active w-100 border-0 py-3" id="sendMessage">Send Message</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 py-5 my-auto d-none d-md-block">
                    <img src="{{asset('assets/images/contact-1.jpg')}}" class="img-fluid" alt="">    
                </div>
            </div>
        </div>
    </section>
    <!-- contact us ends -->

    <!-- google map -->
    <div style="background-color: #F6F6F6;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118983.6153040918!2d81.53667066827742!3d21.262045511343103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dda23be28229%3A0x163ee1204ff9e240!2sRaipur%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1715435393851!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@include('user.layouts.footer')