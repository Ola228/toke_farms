<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agrica - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>Toke's Farms || Fishery Home</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/css/shop.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <style>
        /* Modal default styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            /* Black with opacity */
        }

        .modal-content {
            position: relative;
            margin: 5% auto;
            padding: 0;
            width: 80%;
            max-width: 800px;
            background: #000;
            /* For black background */
        }

        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin: 10px;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            height: 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Play icon styling */
        .play-icon-wrapper {
            text-align: center;
            cursor: pointer;
            margin-top: 20px;
        }

        .play-icon {
            font-size: 60px;
            /* Size of the play icon */
            color: #fff;
            /* White color */
            transition: color 0.3s ease;
            animation: pulse 1.5s infinite;
            /* Animation for pulsing effect */
        }

        .play-icon:hover {
            color: #ff5722;
            /* Color on hover */
        }

        /* Keyframes for pulsing animation */
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>

</head>

<body>

    <?php include 'nav.php' ?>

    <!-- Start Banner Area 
    ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/3.jpg);"></div>
                    <div class="shape">
                        <img src="assets/img/shape/2.png" alt="Image Not Found">
                    </div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-9">
                                <div class="content">
                                    <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text>
                                                    <textPath href="#textPath">Toke's Agroenterprises</textPath>
                                                </text>
                                            </svg>
                                            <a href="#" class="popup-youtube"><i class="fas fa-fish"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h2><strong>Empowering Women in </strong> Aquaculture and Beyond.</h2>
                                        <p>
                                            Discover Premium Quality Fish at Toke's Agroenterprises.
                                        </p>
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="about.php">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/4.png);"></div>
                    <div class="shape">
                        <img src="assets/img/shape/2.png" alt="Image Not Found">
                    </div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-9">
                                <div class="content">
                                    <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath2" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text>
                                                    <textPath href="#textPath">Toke's Agroenterprises</textPath>
                                                </text>
                                            </svg>
                                            <a href="#" class="popup-youtube"><i class="fas fa-fish"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h2><strong>Expert</strong> When It comes to fishery</h2>
                                        <p>
                                            Our catfish are known for their superior taste and quality. Perfect for grilling, frying, or smoking.
                                        </p>
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="about.php">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div class="about-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <img src="assets/img/about/1.jpg" alt="Image Not Found">
                        <div class="animation-shape">
                            <img src="assets/img/illustration/1.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-style-one-info">

                        <h2 class="title">About Toke's <br> Agroenterprises</h2>
                        <p>
                            Toke's Agroenterprises was founded with a vision to revolutionize fish farming in Nigeria. Our farm, located in the Offa Kwara State, combines traditional practices with modern technology to ensure the highest standards of fish production. Our team of experts is committed to delivering fresh, healthy, and delicious fish to our customers, while also promoting sustainable aquaculture.
                        </p>
                        <!-- <div class="fun-fact-style-flex mt-35">
                            <div class="counter">
                                <div class="timer" data-to="25" data-speed="2000">25</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Growth Tonns <br> of Harvest</span>
                        </div> -->
                        <ul class="top-feature">
                            <li>
                                <div class="icon">
                                    <img src="assets/img/icon/3.png" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Sustainably Raised, Expertly Delivered</h4>
                                    <p>
                                        Nurturing Nature, Delivering Quality – The Heartbeat of Premium Fish Farming. </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="assets/img/icon/2.png" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Pioneering Eco-Friendly Aquaculture for Healthier Tomorrow.</h4>
                                    <p>
                                        Where Quality Meets Sustainability in Every Pond.
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-style-one-area bg-gray default-padding bottom-less">
        <!-- <div class="shape-right-top" style="background-image: url(assets/img/shape/9.png);"></div> -->
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">What we do</h5>
                        <h3 class="title">Currently, we are providing premium ,<br> sustainably farmed fish.</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/illustration/2.png" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Fresh Matured<span>Catfish</span></a></h4>
                            </div>
                            <p>
                                Get your hands on our fresh, mature catfish – naturally grown and bursting with rich, savory flavor, perfect for any dish!
                            </p>
                        </div>
                        <a href="about.php" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/illustration/3.png" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Dried <span>Fish</span></a></h4>
                            </div>
                            <p>
                                Savor the taste of our premium dried fish – expertly prepared to deliver a rich, smoky flavor that's perfect for any meal!
                            </p>
                            <a href="about.php" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/illustration/4.png" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Fingerlings <span>Hashing</span></a></h4>
                            </div>
                            <p>
                                Discover the quality of our carefully raised fish for hashing – strong, healthy, and ready to boost your aquaculture success! </p>
                            <a href="about.php" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Start Benifits 
    ============================================= -->
    <div class="benifits-area default-padding-top video-bg-live bg-cover mt--50 mt-md-0 mt-xs-0" style="background-image: url(assets/img/banner/16.jpeg);">
        <!-- <div class="player" data-property="{videoURL:'wnNgujYoXa4',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:13, opacity:1, quality:'default'}"></div> -->
        <div class="shape-top-center" style="background-image: url(assets/img/shape/10.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="benifit-items text-light">
                        <div class="shape">
                            <img src="assets/img/illustration/8.png" alt="Image Not Found">
                        </div>
                        <h2 class="title">Empowering Women in Aquaculture and Beyond</h2>
                        <p>
                            At Toke's Agroenterprises, we are deeply committed to empowering women and championing their active participation in the aquaculture value chain. Our mission extends beyond fish farming; we are dedicated to fostering economic independence and creating sustainable livelihoods for women in our community.
                        </p>
                        <ul class="list-standard">
                            <li>Training in Fish Smoking Techniques</li>
                            <li>Promoting Food Security Through Gardening</li>
                            <li>Building a Brighter Future</li>
                        </ul>
                        <div class="play-icon-wrapper" id="playButton">
                            <i class="fa fa-play-circle play-icon animated"></i>
                        </div>
                    </div>

                </div>


                <!-- Modal Structure -->
                <div id="videoModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="video-container">
                            <!-- YouTube video embed -->
                            <iframe id="youtubeVideo" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Benifits -->

    <!-- Start Product 
    ============================================= -->
    <div class="product-cat-area default-padding">
        <div class="shape-right-bottom-mini">
            <img src="assets/img/shape/11.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="product-cat-items">
                <div class="row align-center">
                    <div class="col-lg-5 product-cat-info">
                        <h4 class="mask-text" style="background-image: url(assets/img/banner/17.jpg);">Women at the Heart of Food Security – Cultivating Skills for a Sustainable Future.</h4>
                    </div>
                    <div class="col-lg-6 offset-lg-1">


                        <h4 style="color:greenyellow">Promoting Food Security Through Gardening</h4>
                        <p style="color:white">
                            In addition to aquaculture, we are passionate about promoting food security by training women in effective gardening techniques. Our programs teach women how to cultivate their own vegetables and simple foods in home gardens, providing them with a sustainable source of nutrition and income. By empowering women to grow their own food, we are helping to build more resilient communities and ensure that families have access to fresh, healthy produce. </p>

                        <br>

                        <h4 style="color:greenyellow">Building a Brighter Future</h4>
                        <p style="color:white">
                            Our commitment to female empowerment goes hand in hand with our dedication to improving food security and reducing unemployment. By equipping women with the skills and knowledge needed to thrive in aquaculture and gardening, we are helping to create a brighter, more sustainable future for our community. At Toke's Agroenterprises, we believe that when women succeed, entire communities benefit – and we are proud to be part of that positive change.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cat -->

    <!-- Start Testimonial 
    ============================================= -->
    <div class="testimonial-area default-padding bg-gray" style="background-image: url(assets/img/shape/13.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testimonial-heading">
                        <h2>Tetsimonials</h2>
                    </div>
                    <div class="testimonial-carousel testimonial-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/3.jpg" alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                        <p>
                                            “Being an IT student, I was initially unsure how much I could learn from an agroenterprise, but my experience at Toke's was eye-opening. I got to work on real-world projects, contribute to their digital marketing strategy, and see firsthand the impact of sustainable practices on local communities. It was truly inspiring!”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Tijani Tawakalit</h4>
                                                <span>IT Student</span>
                                            </div>
                                            <!-- <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/4.jpg" alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                        <p>
                                            “I’ve been buying my produce and smoked fish from Toke's Agroenterprises for a while now, and I’m always impressed by the quality. It’s great to support a local business that is committed to sustainability and community empowerment. Keep up the good work!”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Akintunde Zulaikhoh</h4>
                                                <span>Customer</span>
                                            </div>
                                            <!-- <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/2.jpeg" alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                        <p>
                                            “The smoked catfish I bought from Toke's Agroenterprises was the best I've ever tasted. You can really tell it's been prepared with care and expertise. I also love knowing that my purchase supports such an important mission of empowering women.”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Lawal Habeeb B.</h4>
                                                <span>Customer</span>
                                            </div>
                                            <!-- <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/1.jpg" alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                        <p>
                                            “My internship at Toke's Agroenterprises was an incredible learning experience. I gained hands-on experience in sustainable aquaculture and agriculture, and I loved working with a team committed to empowering women in the community. The skills and knowledge I acquired here will definitely shape my future career.”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Akinlabi Ashraf H.</h4>
                                                <span>IT Student</span>
                                            </div>
                                            <!-- <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Gallery 
    ============================================= -->
    <div class="gallery-style-one-area default-padding">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Awesome Gallery</h5>
                        <h2 class="title">Explore Projects</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fill">
            <div class="row">
                <div class="gallery-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="assets/img/projects/1.jpeg" alt="Image not Found">
                                <div class="overlay">
                                    <p>Pond Under Construction</p>
                                    <h4><a href="#">Toke's agroenterprice</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="assets/img/projects/2.jpeg" alt="Image not Found">
                                <div class="overlay">
                                    <p>Empowering Women Through Knowledge</p>
                                    <h4><a href="#">Empowering women with hands-on training in aquaculture and agriculture</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="assets/img/projects/3.jpeg" alt="Image not Found">
                                <div class="overlay">
                                    <p>Training</p>
                                    <h4><a href="#">Training women for a sustainable future in aquaculture and farming</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="assets/img/projects/4.jpeg" alt="Image not Found">
                                <div class="overlay">
                                    <p>Trainning</p>
                                    <h4><a href="#">Building skills for women's success in aquaculture and agriculture</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="assets/img/projects/5.jpeg" alt="Image not Found">
                                <div class="overlay">
                                    <p>Toke's Farms</p>
                                    <h4><a href="#">Toke's Agroenterprice</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

    <!-- Start Choose Us Area
    ============================================= -->
    <div class="choose-us-style-one-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="choose-us-thumb">
                        <img src="assets/img/illustration/23.jpeg" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="achivement-items">
                        <ul class="list-details">
                            <li>
                            <li>
                                <h4>Promoting Food Security and Youth Empowerment through Community Gardening</h4>
                                <p>
                                    At Toke's Agroenterprises, we believe that promoting food security starts with cultivating sustainable practices at the grassroots level. Our community gardening initiatives are designed to empower the youth in our community by equipping them with the knowledge and skills needed to grow their own food, reduce dependence on external food sources, and ensure a stable supply of fresh produce.
                                </p>
                            </li>
                            <li>
                                <h4>Building a Resilient Community</h4>
                                <p>
                                    Our gardening programs aim to teach young people about sustainable farming techniques, such as crop rotation, organic fertilization, and water conservation methods. By learning these skills, the youth can contribute to a self-reliant community that is less vulnerable to food shortages and price fluctuations.
                                </p>
                            </li>
                        </ul>
                        <div class="achivement-content">
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="100">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Food Security</h4>
                            </div>
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="98">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Youth Empowerment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-area overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="assets/img/shape/16.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-6 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="assets/img/illustration/10.png" alt="Image Not Found">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a massage</h2>
                        <form action="#" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-xl-5 offset-xl-1 col-lg-5">
                    <div class="contact-style-one-info text-light">
                        <h2>
                            Contact
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path>
                                </svg>
                            </span>
                        </h2>
                        <p>
                            At Toke's Agroenterprises, we plan each step with care, ensuring that every initiative supports the growth and empowerment of women in aquaculture. Our efforts are dedicated to creating sustainable livelihoods and fostering a resilient community.
                        </p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="tel:+2349025651416">+234 902 5651 416</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        No. 26A, Ifokanbale community, Goodness Area <br> Lamodi Offa Kwara State Nigeria.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:#">tokeagroenterise@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Blog 
    ============================================= -->

    <!-- End Blog -->

    <script>
        // Get modal elements
        const modal = document.getElementById('videoModal');
        const playButton = document.getElementById('playButton');
        const closeModal = document.getElementsByClassName('close')[0];
        const youtubeVideo = document.getElementById('youtubeVideo');

        // YouTube video URL
        const videoURL = "https://www.youtube.com/embed/wnNgujYoXa4?autoplay=1";

        // Open modal and play video when play icon is clicked
        playButton.onclick = function() {
            modal.style.display = 'block';
            youtubeVideo.src = videoURL;
        };

        // Close modal when close button is clicked
        closeModal.onclick = function() {
            modal.style.display = 'none';
            youtubeVideo.src = ''; // Stop video playback by removing src
        };

        // Close modal when clicking outside of modal content
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
                youtubeVideo.src = ''; // Stop video playback by removing src
            }
        };
    </script>
    <!-- Start Footer 
    ============================================= -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.scrolla.min.js"></script>
    <script src="assets/js/ScrollOnReveal.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/validnavs.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/agrica/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2024 08:24:13 GMT -->

</html>