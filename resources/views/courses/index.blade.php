<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/courses/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 12:27:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front-end/assets/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">
</head>

<body>



    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.header')

    <main>

        <section class="slider-area slider-area2">
            <div class="slider-active">

                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Courses</h1>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('courses.index') }}">Courses</a></li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @if (count($courses) > 0)
                                @foreach ($courses as $course)
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0"
                                                src="{{ asset('/storage/' . $course->course_image) }}" alt="">
                                            <a class="blog_item_date">
                                                <h3>R{{ $course->price }}/hour</h3>
                                                <p>Duration:{{ $course->duration }}</p>
                                            </a>
                                        </div>
                                        <div class="blog_details">
                                            <a class="d-inline-block" href="{{ route('courses.show', $course->id) }}">
                                                <h2 class="blog-head" style="color: #2d2d2d;">{{ $course->title }}</h2>
                                            </a>
                                            <p>{{ $course->description }}</p>
                                            <ul class="blog-info-link">
                                                <li><a href="#"><i class="fa fa-user"></i> Instructor: Barry</a></li>
                                                {{-- <li><a href="#"><i
                                                            class="fa fa-comments"></i> 03 Comments</a></li>
                                                --}}
                                            </ul>
                                        </div>
                                    </article>
                                @endforeach
                            @else
                                <div class="alert alert-info" role="alert">
                                    No courses available yet.
                                </div>
                            @endif

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    {{-- {{ $courses->links() }}
                                    --}}
                                    {{ $courses->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">

                            @include('layouts.partials.newsletter')

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog_area section-padding py-0">

            <div class="container">
                <h1 data-animation="fadeInLeft" data-delay="0.2s"> </h1>
                <div class="section-tittle text-center mb-55">
                    <h2 class="text text-secondary fw-bolder">Programming is too advance for you ? You first need to
                        master basics of computer skills ?
                        We got you. Our programs include the following computer skills. </h2>

                    <p>Nearly every job requires a basic understanding of computers, and many jobs involve intermediate
                        to advanced computer skills. This can include knowledge of specific software, applications or
                        devices. Below, you’ll discover more information about the type of computer skills employers
                        commonly look for in job applicants.</p>
                    </br>
                </div>

                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @if (count($computer_skills) > 0)
                                @foreach ($computer_skills as $computer_skill)
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0"
                                                src="{{ asset('/storage/' . $computer_skill->course_image) }}" alt="">
                                            <a class="blog_item_date">
                                                <h3>R{{ $computer_skill->price }}/hour</h3>
                                                <p>Duration:{{ $computer_skill->duration }}</p>
                                            </a>
                                        </div>
                                        <div class="blog_details">
                                            <a class="d-inline-block"
                                                href="{{ route('courses.show', $computer_skill->id) }}">
                                                <h2 class="blog-head" style="color: #2d2d2d;">
                                                    {{ $computer_skill->title }}
                                                </h2>
                                            </a>
                                            <p>{!! $computer_skill->description !!}</p>
                                            <ul class="blog-info-link">
                                                <li><a href="#"><i class="fa fa-user"></i> Instructor: Barry</a></li>
                                                {{-- <li><a href="#"><i
                                                            class="fa fa-comments"></i> 03 Comments</a></li>
                                                --}}
                                            </ul>
                                        </div>
                                    </article>
                                @endforeach
                            @else
                                <div class="alert alert-info" role="alert">
                                    No computer skills courses available yet.
                                </div>
                            @endif


                        </div>
                    </div>
                    <div class="col-lg-4">
                        {{-- <div class="blog_right_sidebar">

                            @include('layouts.partials.newsletter') --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <br>
    {{-- footer --}}

    @include('layouts.partials.footer')

    {{-- end footer --}}

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="{{ asset('front-end/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/jquery.slicknav.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.magnific-popup.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/gijgo.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.sticky.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/hover-direction-snake.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/contact.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('front-end/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/main.js') }}"></script>

    <script async src="{{ asset('front-end/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
</body>

</html>
