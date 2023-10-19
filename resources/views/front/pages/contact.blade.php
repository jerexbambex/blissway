@extends('layouts.front.template')

@section('title')
    | Contact
@endsection

@section('body')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg24.png">
        <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                    <h1 class="display-1 text-white mb-3">Get in Touch</h1>
                    <p class="lead px-xl-10 px-xxl-10">Have any questions? Reach out to us from our contact form and we will get back to you shortly.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col mt-n19 mb-16">
                    <div class="card shadow-lg">
                        <div class="row gx-0">
                            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm1.jpg">
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <h2 class="display-4 mb-3">Let’s Talk</h2>
                                    <p class="lead fs-lg">Are you ready to embark on your journey abroad? Blissway Immigration is here to guide you every step of the way. Get in touch with our experts, and let's turn your dreams into reality.</p>
                                    <p></p>
                                    <!--<a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>-->
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row gy-10 gx-lg-8 gx-xl-12">
                        <div class="col-lg-8">
                            <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="messages"></div>
                                @if(session('success'))
                                    <div class="alert alert-success alert-icon alert-dismissible fade show card-border-start" role="alert">
                                        <i class="uil uil-check-circle"></i> {{ session('success') }}.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger alert-icon alert-dismissible card-border-start" role="alert">
                                        <i class="uil uil-times-circle"></i> You have some errors in your form, please check through!!!
                                    </div>
                                @endif
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Jane" required>
                                            <label for="form_name">First Name *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            @error('first_name')
                                                <div class="text-red fs-sm"> {{ $errors('first_name') }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Doe" required>
                                            <label for="form_lastname">Last Name *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            @error('last_name')
                                                <div class="text-red fs-sm"> {{ $errors('last_name') }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                            <label for="form_email">Email *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            @error('email')
                                                <div class="text-red fs-sm"> {{ $errors('email') }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-select-wrapper mb-4">
                                            <select class="form-select" id="form-select" name="department">
                                                <option selected disabled value="">Select a department</option>
                                                <option value="counseling">Personalized Counseling</option>
                                                <option value="study-visa">Study Visa</option>
                                                <option value="tourist-visa">Tourist Visa</option>
                                                <option value="pr">PR (Permanent Residency)</option>
                                                <option value="business-visa">Business Visa</option>
                                                <option value="work-visa">Work Visa</option>
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            @error('department')
                                                <div class="text-red fs-sm"> Please select a department. </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-floating mb-4">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                            <label for="form_message">Message *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            @error('message')
                                            <   div class="text-red fs-sm"> {{ $errors('message') }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck"> I agree to <a href="#" class="hover">terms and policy</a>. </label>
                                            <div class="invalid-feedback"> You must agree before submitting. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                                        <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">Address</h5>
                                    <address>1300 Steeles AVE E UNIT#214, Brampton, ON L6T 1A2, Canada</address>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">Phone</h5>
                                    <p>+1 (204) 952 7014 <br />905 687 7014 <br />783 757 7014</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">E-mail</h5>
                                    <p class="mb-0"><a href="mailto:blisswayimmigration@gmail.com" class="link-body">blisswayimmigration[at]gmail.com</a></p>
                                    <!--<p><a href="mailto:help@sandbox.com" class="link-body">help@sandbox.com</a></p>-->
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
