@php
    $normal_gallary_notice = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Normal')
    
        ->orderBy('position', 'ASC')
        ->get();
    
    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    $global_setting = App\Models\GlobalSetting::all()->first();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
@endphp

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shalmani Overseas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/website/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/website/images/favicon.png">
    <!-- ************************* CSS Files ************************* -->

{{--     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/website/assets/css/bootstrap.css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/website/assets/css/vendor.css">
    <!-- style css -->
    <link rel="stylesheet" href="/website/assets/css/main.css"> --}}

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/website/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="/website/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/website/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/website/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/website/assets/lib/slick/slick.css" rel="stylesheet">
    <link href="/website/assets/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/website/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/website/assets/css/responsive.css">



</head>


<body>
    @if (Session::has('contact'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Sucessfully Applyed !!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif


    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="/website/img/logo/logo.png" alt="">
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Govt. License No: </h3>
                                            <p>828/066/067</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>01-5147227, 5147228</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>info@shalmanioverseas.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                @foreach ($menus as $menu)
                                    @if ($menu->childs->count() == 0)
                                        <a href="/{{ $menu->nav_name }}" class="nav-item nav-link @if($loop->iteration == 1) active @endif ">
                                            {{ $menu->caption }}
                                        </a>
                                    @endif
                                    @if ($menu->childs->count() > 0)
                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $menu->caption }}</a>
                                            <div class="dropdown-menu">
                                                @foreach ($menu->childs as $submenu)
                                                        <a
                                                            href="/{{ $menu->nav_name }}/{{ $submenu->nav_name }}" 
                                                                class="dropdown-item">{{ $submenu->caption }}
                                                        </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                            @endforeach
                                {{-- <a href="index.html" class="nav-item nav-link active">Home</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">about</a>
                                    <div class="dropdown-menu">
                                        <a href="about.html" class="dropdown-item">About us</a>
                                        <a href="massage-mc.html" class="dropdown-item">Maseege from Managing Chairman</a>
                                        <a href="about.html" class="dropdown-item">About Nepal</a>
                                        <a href="#" class="dropdown-item">Organization Structure</a>
                                    </div>
                                </div>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="jobSectors.html" class="nav-item nav-link">JOB SECTORS</a>
                                <a href="RecrutmentProcess.html" class="nav-item nav-link">Recruitment Process</a>
                                <a href="Gallery.html" class="nav-item nav-link">Gallary</a>
                                <a href="Contact.html" class="nav-item nav-link">Contact</a> --}}
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="#">Job Opening</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->

            @yield('content')
            <!-- Slider area Start -->

            <!-- About Area Start -->

            <!-- Job Category Area Start -->

            <!-- Job Category Area End -->

            <!-- Message Area Start -->

            <!-- Latest Job Area Start -->

            <!-- Brand Logo Area Start -->

        <!-- Main Content Wrapper End -->

        <!-- Footer Start-->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>Office Contact</h2>
                            <p><i class="fa fa-map-marker-alt"></i>G.P.O. Box: 8975, EPC-595, Koteshwor, Kathmandu, Nepal
                            </p>
                            <p><i class="fa fa-phone-alt"></i>01-5147227, 5147228</p>
                            <p><i class="fa fa-envelope"></i>info@shalmanioverseas.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>JOB SECTORS</h2>
                            <a href="">Security Guard</a>
                            <a href="">Hotel Group</a>
                            <a href="">Mechanics</a>
                            <a href="">Engineering Group</a>
                            <a href="">Civil Construction</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="">About Us</a>
                            <a href="">Job Sectors</a>
                            <a href="">Contact</a>
                            <a href="">Testimonial</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                velit non vulpu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            &copy;  
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Shalmani Overseas Pvt. Ltd.</a> All Right Reserved. Developed by <a
                                href="https://radiantnepal.com/">Radiant Infotech Nepal</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->



        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Global Overlay Start -->
        <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
        <!-- Global Overlay End -->
    </div>

    <!-- Wrapper End -->


    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <!-- Global Overlay End -->

    <!-- Global Overlay Start -->
    <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
    <!-- Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/website/assets/lib/easing/easing.min.js"></script>
    <script src="/website/assets/lib/wow/wow.min.js"></script>
    <script src="/website/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/website/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/website/assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/website/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/website/assets/lib/counterup/counterup.min.js"></script>
    <script src="/website/assets/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="/website/assets/js/main.js"></script>
    <script>
          var gallery = document.querySelector('#gallery');
        var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
        var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
        var resizeAll = function () {
            var altura = getVal(gallery, 'grid-auto-rows');
            var gap = getVal(gallery, 'grid-row-gap');
            gallery.querySelectorAll('.gallery-item').forEach(function (item) {
                var el = item;
                el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
            });
        };
        gallery.querySelectorAll('img').forEach(function (item) {
            item.classList.add('byebye');
            if (item.complete) {
                console.log(item.src);
            }
            else {
                item.addEventListener('load', function () {
                    var altura = getVal(gallery, 'grid-auto-rows');
                    var gap = getVal(gallery, 'grid-row-gap');
                    var gitem = item.parentElement.parentElement;
                    gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
                    item.classList.remove('byebye');
                });
            }
        });
        window.addEventListener('resize', resizeAll);
        gallery.querySelectorAll('.gallery-item').forEach(function (item) {
            item.addEventListener('click', function () {
                item.classList.toggle('full');
            });
        });
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

{{-- SRS
    <!-- jQuery JS -->
    <script src="/website/assets/js/vendor.js"></script>
    <script src="http://www.loginoverseas.com/website/js/popper.min.js"></script>
    <!-- Main JS -->
    <script src="/website/assets/js/main.js"></script>

    <script type="text/javascript">
        function closeForm() {
            $('.form-popup-bg').removeClass('is-visible');
        }

        $(document).ready(function($) {

            /* Contact Form Interactions */
            $('#btnOpenForm').on('click', function(event) {
                event.preventDefault();

                $('.form-popup-bg').addClass('is-visible');
            });

            //close popup when clicking x or off popup
            $('.form-popup-bg').on('click', function(event) {
                if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });



        });
        $(document).ready(function($) {

            /* Contact Form Interactions */
            $('#btnOpenFormbutton').on('click', function(event) {
                event.preventDefault();

                $('.form-popup-bg').addClass('is-visible');
            });

            //close popup when clicking x or off popup
            $('.form-popup-bg').on('click', function(event) {
                if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });



        });
    </script>

 <!-- gllery js -->
 <script src="/website/assets/js/gallery/picturefill.min.js"></script>
 <script src="/website/assets/js/gallery/lightgallery.js"></script>
 <script src="/website/assets/js/gallery/lg-pager.js"></script>
 <script src="/website/assets/js/gallery/lg-autoplay.js"></script>
 <script src="/website/assets/js/gallery/lg-fullscreen.js"></script>
 <script src="/website/assets/js/gallery/lg-zoom.js"></script>
 <script src="/website/assets/js/gallery/lg-hash.js"></script>
 <script src="/website/assets/js/gallery/lg-share.js"></script>

 <script type="text/javascript">lightGallery(document.getElementById('lightgallery'));</script> --}}


</body>

</html>
