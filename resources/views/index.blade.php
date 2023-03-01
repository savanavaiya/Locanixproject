<!DOCTYPE html>
<html lang="en">

<head>
    <title>Locanix</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- -------BOOTSTRAP CSS----- -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- ------OWL CAROUSEL CSS-------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- -------------ANIMATION CSS-------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <!-- -------CUSTOM CSS----------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body id="custom_scrollbar">

    <div class="loader-wrapper">
        <div id="loader-img">
            <div class="loader">
            </div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <div class="main_div position-relative">
        <div class="layer" data-speed="-5">
            <div class="shape_1">
                <img src="{{ asset('assets/images/shape_1.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_2">
                <img src="{{ asset('assets/images/shape_2.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_3">
                <img src="{{ asset('assets/images/shape_3.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_4">
                <img src="{{ asset('assets/images/shape_4.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_5">
                <img src="{{ asset('assets/images/shape_5.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_6">
                <img src="{{ asset('assets/images/shape_6.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_7">
                <img src="{{ asset('assets/images/shape_7.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_8">
                <img src="{{ asset('assets/images/shape_8.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="shape_9">
                <img src="{{ asset('assets/images/shape_9.png') }}" alt="Locanix" class="img-fluid" />
            </div>
        </div>
        <!-- -----HEADER START----------- -->
        <!-- -------MOBILE HEADER------- -->
        <div class="mobile_header d-xxl-none d-xxl-none d-lg-none d-md-block d-block py-3">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <a href="#" class="logo">
                            <img src="{{ asset('assets/images/Group 135.svg') }}" alt="Logo" class="img-fluid" />
                        </a>
                        <!-- <div class="d-flex align-items-center"> -->

                        <a href="#" class="toggle_button menu_btn">
                            <span></span>
                        </a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile_menu_wrapper d-xxl-none d-xxl-none d-lg-none d-md-block d-block">
            <div class="mobile_menu">
                <a href="#" class="close_btn menu_btn">
                    <img src="{{ asset('assets/images/closeLarge.svg') }}" alt="close" class="img-fluid" />
                </a>
                <ul>
                    {{-- <li class="active">
              <a href="#"> 99 Reasons </a>
            </li> --}}
                    <li>
                        <a href="#"> Fleet </a>
                    </li>
                    {{-- <li>
              <a href="#"> Consignment </a>
            </li> --}}
                    <li>
                        <a href="type_of_vehical.html"> Pricing </a>
                    </li>
                    <li>
                        <a href="#" class="login_button">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- --------DESKTOP HEADER------------ -->
        <header>
            <div class="header d-xxl-block d-xxl-block d-lg-block d-md-none d-none" id="myHeader">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                            <a href="#" class="logo">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-6">
                            <ul class="header_link d-flex align-items-center justify-content-center">
                                {{-- <li class="active">
                    <a href="#">99 Reasons</a>
                  </li> --}}

                                <li>
                                    <a href="#">Fleet</a>
                                </li>
                                {{-- <li>
                    <a href="#">Consignment</a>
                  </li> --}}
                                <li>
                                    <a href="{{ route('pricingpage') }}">Pricing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                            <a href="#" class="header_button">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ------BANNER START----------- -->
        <div class="banner">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-12 col-12">
                        <div class="banner_content">
                            <h1>
                                When your fleet is on track, <br />
                                your business is too.
                            </h1>
                            <p>
                                We build smart tools for the modern transport operations. The most trusted and advanced
                                fleet management platform backed by dependable support to help you reduce cost and
                                increase revenue.
                            </p>
                            <div class="trial_btn">
                                <button type="button" class="btn button_custom">
                                    <span class="btn__text">Check Pricing</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div clas="col-xl-10">
                        <div class="banner-img text-center">
                            <img src="{{ asset('assets/images/banner_imageupdate.png') }}" height="805.03px"
                                width="1281px" alt="Locanix" class="img-fluid" />
                            {{-- <img src="{{ asset('assets/images/banner_image.png') }}" alt="Locanix" class="img-fluid" /> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------OUR PARTNERS----------- -->

    <div class="partners">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-12">
                    <h2 class="common_ttl text-center">Our Partners</h2>
                    <p class="common_dis text-center mt-3">
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-11 col-xl-11 col-lg-12 col-md-12 col-12">
                    <div
                        class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 text-center">
                        {{-- <div
                        class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-5 row-cols-xl-5 row-cols-xxl-5 text-center"> --}}
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/tyresoles-logo.png') }}" alt="tyresoles"
                                class="img-fluid" />
                        </div>
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/amul_logo.png') }}" alt="amul_logo"
                                class="img-fluid" />
                        </div>
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/Acc_Logo_Black_Purple_RGB.png') }}"
                                alt="Acc_Logo_Black_Purple_RGB" class="img-fluid" />
                        </div>
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/ice-make-refrigeration-limited-90x90-1.png') }}"
                                alt="ice-make-refrigeration" class="img-fluid" />
                        </div>
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/logo (2).png') }}" alt="logo" class="img-fluid" />
                        </div>
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/main-logo.png') }}" alt="main"
                                class="img-fluid" />
                        </div>
                        <div class="col mt-4">
                            <img src="{{ asset('assets/images/kpmg-logo-1.png') }}" alt="kpmg"
                                class="img-fluid" />
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-3 mt-4 mb-4">
                            <img src="{{ asset('assets/images/tyresoles-logo.png') }}" alt="tyresoles"
                                class="i1" />
                        </div>
                        <div class="col-lg-3 mt-4 mb-4">
                            <img src="{{ asset('assets/images/amul_logo.png') }}" alt="amul_logo"
                                class="i2" />
                        </div>
                        <div class="col-lg-3 mt-4 mb-4">
                            <img src="{{ asset('assets/images/Acc_Logo_Black_Purple_RGB.png') }}"
                                alt="Acc_Logo_Black_Purple_RGB" class="i3" />
                        </div>
                        <div class="col-lg-3 mt-4 mb-4">
                            <img src="{{ asset('assets/images/ice-make-refrigeration-limited-90x90-1.png') }}"
                                alt="ice-make-refrigeration" class="i4" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mt-4 mb-4 d-flex justify-content-lg-end">
                            <img src="{{ asset('assets/images/logo (2).png') }}" alt="logo" class="i5" />
                        </div>
                        <div class="col-lg-4 mt-4 mb-4">
                            <img src="{{ asset('assets/images/main-logo.png') }}" alt="main"
                                class="i6" />
                        </div>
                        <div class="col-lg-4 mt-4 mb-4">
                            <img src="{{ asset('assets/images/kpmg-logo-1.png') }}" alt="kpmg"
                                class="i7" />
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- ----------CUSTOMERS---------- -->
    <div class="cutomers mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-12">
                    <h2 class="common_ttl text-center">Loved By our Customers</h2>
                    <p class="common_dis text-center mt-3">
                        “You are in a good company.”
                    </p>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-xxl-10 col-xl-11 col-lg-12 col-md-12 col-12">
                    <div class="owl-carousel owl-theme cutomers-slider">
                        <div class="items">
                            <div class="review_box">
                                <div class="customer_details d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="customer_image">
                                            <img src="{{ asset('assets/images/customer_1.png') }}" alt="Cutomer"
                                                class="img-fluid" />
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="customer_name">Viezh Robert</h6>
                                            <small class="customer_loc">Warsaw, Poland</small>
                                        </div>
                                    </div>
                                    <div class="review_star d-flex align-items-center">
                                        <span>4.5</span>
                                        <img src="{{ asset('assets/images/star.png') }}" alt=""
                                            class="img-fluid ms-2" />
                                    </div>
                                </div>
                                <p class="mt-3">
                                    The reason I found Locanix more suitable than all previous vendors was their
                                    reliable support and accurate data analysis. It helped us make better decisions and
                                    eliminate efficiency leakages that could not have been possible otherwise.
                                </p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="review_box">
                                <div class="customer_details d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="customer_image">
                                            <img src="{{ asset('assets/images/customer_2.png') }}" alt="Cutomer"
                                                class="img-fluid" />
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="customer_name">Yessica Christy</h6>
                                            <small class="customer_loc">Shanxi, China</small>
                                        </div>
                                    </div>
                                    <div class="review_star d-flex align-items-center">
                                        <span>4.5</span>
                                        <img src="{{ asset('assets/images/star.png') }}" alt=""
                                            class="img-fluid ms-2" />
                                    </div>
                                </div>
                                <p class="mt-3">
                                    We’ve been partnering with Locanix for more than 6 years now. Countless times, their
                                    reports and notifications have helped us prevent losses. They have become integral
                                    part of our fleet operations.
                                </p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="review_box">
                                <div class="customer_details d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="customer_image">
                                            <img src="{{ asset('assets/images/customer_3.png') }}" alt="Cutomer"
                                                class="img-fluid" />
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="customer_name">Kim Young Jou</h6>
                                            <small class="customer_loc">Seoul, South Koreaa</small>
                                        </div>
                                    </div>
                                    <div class="review_star d-flex align-items-center">
                                        <span>4.5</span>
                                        <img src="{{ asset('assets/images/star.png') }}" alt=""
                                            class="img-fluid ms-2" />
                                    </div>
                                </div>
                                <p class="mt-3">
                                    We are one of the early adopters of latest trends in technology in transportation.
                                    Locanix holds a very deep understanding of IoT and transportation domain. Be it
                                    CAN-Bus data analysis from our BSIV/BSVI vehicles or Driving behavior or Advanced
                                    API integration, Locanix has always stood the test of the time.
                                </p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="review_box">
                                <div class="customer_details d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="customer_image">
                                            <img src="{{ asset('assets/images/customer_1.png') }}" alt="Cutomer"
                                                class="img-fluid" />
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="customer_name">Viezh Robert</h6>
                                            <small class="customer_loc">Warsaw, Poland</small>
                                        </div>
                                    </div>
                                    <div class="review_star d-flex align-items-center">
                                        <span>4.5</span>
                                        <img src="{{ asset('assets/images/star.png') }}" alt=""
                                            class="img-fluid ms-2" />
                                    </div>
                                </div>
                                <p class="mt-3">
                                    The reason I found Locanix more suitable than all previous vendors was their
                                    reliable support and accurate data analysis. It helped us make better decisions and
                                    eliminate efficiency leakages that could not have been possible otherwise.
                                </p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="review_box">
                                <div class="customer_details d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="customer_image">
                                            <img src="{{ asset('assets/images/customer_3.png') }}" alt="Cutomer"
                                                class="img-fluid" />
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="customer_name">Kim Young Jou</h6>
                                            <small class="customer_loc">Seoul, South Koreaa</small>
                                        </div>
                                    </div>
                                    <div class="review_star d-flex align-items-center">
                                        <span>4.5</span>
                                        <img src="{{ asset('assets/images/star.png') }}" alt=""
                                            class="img-fluid ms-2" />
                                    </div>
                                </div>
                                <p class="mt-3">
                                    We are one of the early adopters of latest trends in technology in transportation.
                                    Locanix holds a very deep understanding of IoT and transportation domain. Be it
                                    CAN-Bus data analysis from our BSIV/BSVI vehicles or Driving behavior or Advanced
                                    API integration, Locanix has always stood the test of the time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------EFFORTLESS EFFICIENT FLEET OPERATIN---------- -->
    <div class="effortless bg-light-blue py-5 mt-200 position-relative">
        <div class="layer" data-speed="-5">
            <div class="half_circle_shape">
                <img src="{{ asset('assets/images/half_circle.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="dot_light">
                <img src="{{ asset('assets/images/dot_light.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="dot_dark">
                <img src="{{ asset('assets/images/dot_dark.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="triangle">
                <img src="{{ asset('assets/images/triangle.png') }}" alt="Locanix" class="img-fluid" />
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="effortless_list position-relative">
                        <div class="rectangle_image">
                            <img src="{{ asset('assets/images/rectangle.png') }}" alt="Locanix"
                                class="img-fluid" />
                        </div>
                        <ul>
                            <li class="mt-4">
                                <div class="effortless_list_image">
                                    <img src="{{ asset('assets/images/driver_behaviour.png') }}"
                                        alt="Driver Behavior" class="img-fluid" />
                                </div>
                                <h3>Real-time tracking</h3>
                            </li>
                            <li class="mt-4">
                                <div class="effortless_list_image">
                                    <img src="{{ asset('assets/images/klipartz-1.png') }}" alt="Driver Behavior"
                                        class="img-fluid" />
                                </div>
                                <h3>Geofences and Points of interest</h3>
                            </li>
                            <li class="mt-4">
                                <div class="effortless_list_image">
                                    <img src="{{ asset('assets/images/vector-road-5-1.png') }}" alt="Driver Behavior"
                                        class="img-fluid" />
                                </div>
                                <h3>Movement history</h3>
                            </li>
                            <li class="mt-4">
                                <div class="effortless_list_image">
                                    <img src="{{ asset('assets/images/Group-1447.png') }}" alt="Driver Behavior"
                                        class="img-fluid" />
                                </div>
                                <h3>Temperature monitoring</h3>
                            </li>
                            <li class="mt-4">
                                <div class="effortless_list_image">
                                    <img src="{{ asset('assets/images/temprature.png') }}" alt="Driver Behavior"
                                        class="img-fluid" height="80px" width="80px"
                                        style="padding: 0px 10px 0px 10px" />
                                </div>
                                <h3>Virtual Odometer</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="effortless_content">
                        <h2 class="common_ttl_2">
                            Effortless and Efficient Fleet operations
                        </h2>
                        <p class="common_dis_2 mt-4">
                            A Fleet Center for your growing logistics and "transportation
                            business. For a growing fleet business, you need to go well
                            beyond just real-time tracking without compromising on your data
                            security.With our vast experience and rich platform,we can
                            deliver the results" with lasting ROI.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------DELIVER CONSIGNMENTS-------- -->
    <div class="consignments">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-12 col-md-12 col-12 mt-5">
                    <div class="consignments_content">
                        <h2 class="common_ttl_2">Advanced In-transit control and Driving Insights</h2>
                        <p class="common_dis_2 mt-4">
                            Breaking the barrier of conventional location technologies we will help you with not us
                            vehicle location but also how it is being handled by the driver. Go beyond real-time
                            tracking and capture insights on driving behavior. Reduce maintenance and tyre cost, and
                            increase vehicle up-time by analyzing driving behavior and vehicle utilization KPIs.
                        </p>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-12 mt-5">
                    <div class="consignment_list position-relative">
                        <ul>
                            <li>
                                <div class="consignment_list_box">
                                    <h5 class="mb-0">
                                        Driving <br> behavior
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="consignment_list_box">
                                    <h5 class="mb-0">
                                        Fleet <br> Maintenance
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="consignment_list_box">
                                    <h5 class="mb-0">
                                        HMR and Idling
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="consignment_list_box">
                                    <h5 class="mb-0">
                                        Area Search
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------INDUSTRIAL---------- -->
    <div class="industrial bg-light-blue py-5 mt-200 position-relative">
        <div class="layer" data-speed="-5">
            <div class="half_circle_shape">
                <img src="{{ asset('assets/images/half_circle.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="rectangle_image_1">
                <img src="{{ asset('assets/images/rectangle.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="dot_dark">
                <img src="{{ asset('assets/images/dot_dark.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="triangle">
                <img src="{{ asset('assets/images/triangle.png') }}" alt="Locanix" class="img-fluid" />
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="industrial_list position-relative">
                        <ul>
                            <li>
                                <div class="industrial_list_image">
                                    <img src="{{ asset('assets/images/charge.png') }}" alt="Driver Behavior"
                                        class="img-fluid" />
                                </div>
                                <h3>CAN-Bus (J1708 / J1939)</h3>
                            </li>
                            <li class="mt-4">
                                <div class="industrial_list_image">
                                    <img src="{{ asset('assets/images/anxiety.png') }}" alt="Locanix"
                                        class="img-fluid" />
                                </div>
                                <h3>Impact Detection</h3>
                            </li>
                            <li class="mt-4">
                                <div class="industrial_list_image">
                                    <img src="{{ asset('assets/images/34315523-1.png') }}" alt="Locanix"
                                        class="img-fluid" />
                                </div>
                                <h3>Smart Reports and Data visualization</h3>
                            </li>
                            <li class="mt-4">
                                <div class="industrial_list_image">
                                    <img src="{{ asset('assets/images/battery_charge.png') }}" alt="Locanix"
                                        class="img-fluid" />
                                </div>
                                <h3>Dynamic event configurations</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="effortless_content">
                        <h2 class="common_ttl_2">
                            Make most out of your Euro3+ / BS4+ fleet. Know what you must.
                        </h2>
                        <p class="common_dis_2 mt-4">
                            Path-breaking technology that detects all key parameters of the Engine-RPM, Working-Hours,
                            Fuel consumption, Engine Temperature, Odometer, Impact (Crash) and more. Transform live data
                            into actionable intelligence and data visualization with our Euro3+ / BS4 / BS6 fleet
                            systems. Capture CAN data from any CAN-enabled vehicle or equipment and get smart reports.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------HEAVY EQUIPMENT-------- -->
    <div class="equipment mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-12 col-md-12 col-12 mt-5">
                    <div class="equipment_content">
                        <h2 class="common_ttl_2">Cutting-edge innovation at your finger tips</h2>
                        <p>&nbsp;</p>
                        <p class="common_dis_2 mt-4">
                            Step up your fleet operations by leveraging the cutting-edge technology tools built for
                            those who continuously innovate and grow. These tools are built to save your time and giving
                            your fleet operations team an unparallel advantage in their routine tasks. With Advanced
                            Role-based access and rich APIs take your investments to higher ROI.
                        </p>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-12 mt-5">
                    <div class="equipment_list position-relative">
                        <ul>
                            <li>
                                <div class="equipment_list_box">
                                    <h5 class="mb-0">
                                        Proximity Detection
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="equipment_list_box">
                                    <h5 class="mb-0">
                                        Telegram Chatbots
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="equipment_list_box">
                                    <h5 class="mb-0">
                                        Range detection in <br>Electric vehicles
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="equipment_list_box">
                                    <h5 class="mb-0">
                                        Advance API and KML integrations for GIS
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------READY TO TRY------- -->
    <div class="ready_try position-relative">
        <div class="dot_purple">
            <img src="{{ asset('assets/images/dot_purple.png') }}" alt="Locanix" class="img-fluid" />
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12 mt-5 rmtt-0">
                    <div class="ready_try-img"></div>
                </div>
                <div class="offset-xxl-2 col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-12 mt-5">
                    <div class="ready_try_content text-center">
                        <h2>Ready to Try?</h2>
                        {{-- <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Lorem Ipsum is simply dummy.
                        </p> --}}
                        <input type="text" class="form-control mt-4" placeholder="Enter Your Mobile Number" />
                        <button type="button" class="btn button_custom mt-5">
                            <span class="btn__text">
                                <img src="{{ asset('assets/images/call.png') }}" alt="Locanix"
                                    class="img-fluid me-2" />
                                Arrange Call Back</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------USEFUL FLEET MANAGEMENT RESOURCES------ -->
    {{-- <div class="fleet_management">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 text-center">
                    <h2 class="common_ttl">Userful Fleet Management Resources</h2>
                </div>
                <div class="col-xl-2 text-center">
                    <a href="#" class="view_mote_btn">View More
                        <img src="{{ asset('assets/images/arroy_gray.png') }}" alt="Locanix"
                            class="img-fluid ms-2" />
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mt-5">
                    <div class="fleet_management_box">
                        <div class="fleet_management_box_img">
                            <img src="assets/images/management_1.png" alt="Locanix" />
                        </div>
                        <div class="fleet_management_box_content">
                            <h6>Business Management</h6>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mt-5">
                    <div class="fleet_management_box">
                        <div class="fleet_management_box_img">
                            <img src="{{ asset('assets/images/management_2.png') }}" alt="Locanix" />
                        </div>
                        <div class="fleet_management_box_content">
                            <h6>Business Management</h6>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mt-5">
                    <div class="fleet_management_box">
                        <div class="fleet_management_box_img">
                            <img src="{{ asset('assets/images/management_3.png') }}" alt="Locanix" />
                        </div>
                        <div class="fleet_management_box_content">
                            <h6>Business Management</h6>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mt-5">
                    <div class="fleet_management_box">
                        <div class="fleet_management_box_img">
                            <img src="{{ asset('assets/images/management_4.png') }}" alt="Locanix" />
                        </div>
                        <div class="fleet_management_box_content">
                            <h6>Business Management</h6>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ------------FOOTER START----------- -->
    <footer>
        {{-- <div class="footer position-relative">
            <div class="blue_dot_1">
                <img src="{{ asset('assets/images/blue-dot.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="blue_dot_2">
                <img src="{{ asset('assets/images/blue-dot.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11 col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="footer_content bg-light-blue position-relative">
                            <div class="footer_square">
                                <img src="{{ asset('assets/images/footer_square.png') }}" alt="Locanix"
                                    class="img-fluid" />
                            </div>
                            <div class="footer_triangle">
                                <img src="{{ asset('assets/images/triangle.png') }}" alt="Locanix"
                                    class="img-fluid" />
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-12">
                                    <div class="info">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                                            class="img-fluid" />
                                        <p class="mt-5">
                                            LOCANIX is a private virtual network that has unique
                                            features and has high security.
                                        </p>
                                        <ul class="socila_links d-flex align-items-center mt-5">
                                            <li class="me-4">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="me-4">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="offset-xxl-2 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-12">
                                    <div class="footer_links">
                                        <h5>Product</h5>
                                        <ul class="mt-4">
                                            <li>
                                                <a href="#">Download </a>
                                            </li>
                                            <li>
                                                <a href="#">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="#">Locations</a>
                                            </li>
                                            <li>
                                                <a href="#">Server</a>
                                            </li>
                                            <li>
                                                <a href="#">Countries</a>
                                            </li>
                                            <li>
                                                <a href="#">Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-12">
                                    <div class="footer_links">
                                        <h5>Engage</h5>
                                        <ul class="mt-4">
                                            <li>
                                                <a href="#">LaslesVPN ? </a>
                                            </li>
                                            <li>
                                                <a href="#">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#">Tutorials</a>
                                            </li>
                                            <li>
                                                <a href="#">About Us</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms of Service</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-12">
                                    <div class="footer_links">
                                        <h5>Earn Money</h5>
                                        <ul class="mt-4">
                                            <li>
                                                <a href="#">Affiliate </a>
                                            </li>
                                            <li>
                                                <a href="#">Become Partner</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer position-relative">
            <div class="blue_dot_1">
                <img src="{{ asset('assets/images/blue-dot.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="blue_dot_2">
                <img src="{{ asset('assets/images/blue-dot.png') }}" alt="Locanix" class="img-fluid" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11 col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="footer_content bg-light-blue position-relative">
                            <div class="footer_square">
                                <img src="{{ asset('assets/images/footer_square.png') }}" alt="Locanix"
                                    class="img-fluid" />
                            </div>
                            <div class="footer_triangle">
                                <img src="{{ asset('assets/images/triangle.png') }}" alt="Locanix"
                                    class="img-fluid" />
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-12">
                                    <div class="info">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                                            class="img-fluid" />
                                        <div class="footer_links">
                                            {{-- <h5>Product</h5> --}}
                                            <ul class="mt-4">
                                                <li>
                                                    <a href="{{ route('pricingpage') }}">Pricing</a>
                                                </li>
                                                <li>
                                                    <a href="#">About Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xxl-2 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-12">

                                </div>
                                <div class="offset-xxl-2 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-12">
                                    <div class="footer_links">
                                        <h5>Contact Us</h5>
                                        <ul class="mt-4">
                                            <li>
                                                <span><i class="fa fa-envelope" aria-hidden="true"
                                                        style="margin-right: 5px;"></i>ruchit@locanix.com</span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"
                                                        style="margin-right: 5px;"></i>+91 99040 38880</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="socila_links d-flex align-items-center justify-content-center">
                                    <li class="me-4">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="me-4">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sub_footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <span>©2022 Locanix All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- -----------JAVASCRIPT FILE------------ -->
    <!-- ------JQUERY----------- -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- -------POPPER JS------ -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- ---------BOOTSTRAP JS----------- -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- --------OWL CAROUSEL --------------- -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- ---------FONT AWESOME 5 ICONS-------- -->
    <script src="{{ asset('assets/js/font-awesome.js') }}"></script>
    <!-- ------ANIMATION JS------ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- ----------CUSTOM JS------------- -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
