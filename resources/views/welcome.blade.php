@extends('layouts.front.template')

@section('title')
    | Welcome
@endsection

@section('body')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300" data-image-src="./assets/img/photos/bg14.png">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">Empower Your Global Journey Through <span class="underline-3 style-2 yellow">Blissway Immigration</span></h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">Unlock Boundless Opportunities Through Immigration.</p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Get Started</a>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <div class="row gx-md-5 gy-5 mt-n19 mb-14 mb-md-17 align-items-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/edit.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-fuchsia mb-3" alt="" />
                            <h4>Education</h4>
                            <p class="mb-2">It's not just about textbooks; it's about immersing yourself in a world of ideas and perspectives that can shape your future.</p>
{{--                            <a href="#" class="more hover link-fuchsia">Learn More</a>--}}
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/team.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-violet mb-3" alt="" />
                            <h4>Career Growth</h4>
                            <p class="mb-2">Reaching new heights in your professional life, accessing global job markets, and realizing your full potential.</p>
{{--                            <a href="#" class="more hover link-violet">Learn More</a>--}}
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-orange mb-3" alt="" />
                            <h4>Personal Development</h4>
                            <p class="mb-2">Develop a global mindset that will enrich your life in countless ways beyond academics.</p>
{{--                            <a href="#" class="more hover link-orange">Learn More</a>--}}
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Our Services</h2>
                    <h3 class="display-4 mb-9 px-xl-11">Comprehensive Support Tailored to Your Immigration Goals.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/meeting.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">Personalized Counseling</h4>
                            <p class="mb-0">Your immigration goals are as unique as you are. That's why we offer personalized counseling services to ensure that your journey aligns perfectly with your aspirations.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/certificate.svg" class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">Study Visa</h4>
                            <p class="mb-0">Embarking on an international educational journey is an exciting opportunity, but it can also be daunting. Our student visa assistance service is designed to simplify the process.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/geolocalization.svg" class="svg-inject icon-svg icon-svg-sm text-red me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">Tourist Visa</h4>
                            <p class="mb-0">Our tourist visa assistance service simplifies the process of obtaining visas for leisure and travel purposes.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">PR (Permanent Residency)</h4>
                            <p class="mb-0">We'll guide you through the process of applying for permanent residency, helping you meet the eligibility criteria and submit a strong application.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/profits.svg" class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">Business Visa</h4>
                            <p class="mb-0">We provide guidance on obtaining the necessary business visas, ensuring that you meet all regulatory requirements.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-sm text-purple me-4" alt="" />
                        </div>
                        <div>
                            <h4 class="mb-1">Work Visa</h4>
                            <p class="mb-0">We'll help you navigate the complexities of work visa applications and ensure you have the required documentation to pursue your career goals internationally.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-gray">
        <div class="container py-15 py-md-17 pb-md-19">
            <div class="row align-items-center gy-8 mb-13">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Save Time and Money</h2>
                    <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">Discover What Our Clients Have to Say About <span class="underline-3 style-2 yellow">Blissway</span> Immigration.</h3>
                </div>
                <!-- /column -->
                <div class="col-lg-5">
                    <div class="row gy-6 text-center">
                        <div class="col-md-6">
                            <div class="progressbar semi-circle fuchsia" data-value="95"></div>
                            <h4 class="mb-0">Customer Satisfaction</h4>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="progressbar semi-circle orange" data-value="90"></div>
                            <h4 class="mb-0">Success Rate</h4>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->



    <section class="wrapper bg-light">
        <div class="container py-16 py-md-18">
            <div class="card shadow-lg mt-n21 mt-md-n23">
                <div class="row gx-0">
                    <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="./assets/img/photos/student-red.jpg">
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div class="p-10 p-md-11 px-lg-13 py-lg-14">
                            <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Thanku team Blissway for helping me get my Australia visa. You guys are the best. 10 on 10 for your expertise. All those planning to study in Australia must visit.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Jasraman Kaur</h5>
                                                        <p class="mb-0">Australia Study Visa</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Cory Zamora</h5>
                                                        <p class="mb-0">Marketing Specialist</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Nikolas Brooten</h5>
                                                        <p class="mb-0">Sales Manager</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!--/div -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.card -->

            <div class="container py-14 py-md-16">
                <div class="row mb-8">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="fs-16 text-uppercase text-primary mb-3">Analyze Now</h2>
                        <h3 class="display-4 mb-0">Blissway Immigration is a leading education consultant in India that has been serving aspiring students since 2013 to study abroad.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->


            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mt-17">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-12">
                            <figure class="rounded mx-md-5"><img src="./assets/img/photos/ontario.jpg" srcset="./assets/img/photos/ontario2x.jpg 2x" alt="Photo by Scott Webb: https://www.pexels.com/photo/low-angle-photography-of-curtain-wall-building-2530580/"></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <figure class="rounded"><img src="./assets/img/photos/g9.jpg" srcset="./assets/img/photos/g9@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <figure class="rounded"><img src="./assets/img/photos/g10.jpg" srcset="./assets/img/photos/g10@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">What Makes Us Different?</h2>
                    <h3 class="display-3 mb-8">Wish to study in <span class="underline-3 style-1 orange">Canada</span> or the <mark>UK</mark></h3>
                    <div class="row gy-6">
                        <div class="col-md-12">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Creativity</h4>
                                    <p class="mb-0">Experience the difference by consulting our professionally experienced and exceptionally friendly Team of Experts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary btn-icon btn-icon-end mt-2">Apply Now <i class="uil uil-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container pb-13 pb-md-15">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14" data-image-src="./assets/img/photos/bg14.png">
                <div class="card-body p-10 p-xl-12">
                    <div class="row text-center">
                        <div class="col-xl-11 col-xxl-9 mx-auto">
                            <h2 class="fs-16 text-uppercase text-white mb-3">Ready to Begin Your Global Journey</h2>
                            <h3 class="display-3 mb-8 px-lg-8 text-white">Unlock <span class="underline-3 style-2 yellow">world-class</span> education, career growth, and personal development opportunities.</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="d-flex justify-content-center">
                        <span><a class="btn btn-white rounded">Request Consultation</a></span>
                    </div>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
