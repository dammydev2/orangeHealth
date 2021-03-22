<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="orange health, health in lagos, donate to orange health">
    <meta name="description" content="">
    <title>orange health</title>
    <link rel="shortcut icon" href="{{ asset('images/OREANGE HEALTH LOGO.jpg') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <!-- 
        Composite Template 
        http://www.templatemo.com/preview/templatemo_444_composite
        -->
    <script src="https://kit.fontawesome.com/6b6030dd17.js" crossorigin="anonymous"></script>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse">

    <!-- start templatemo navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <div class="element-inline">
                    <a href="#" class="navbar-brand content-inline"><img src="{{ asset('images/OREANGE HEALTH LOGO.jpg') }}" alt="orange logo" class="img img-responsive" width="50"> </a>
                    <a href="" class="navbar-brand content-inline"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orange Health</a>
                </div>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" onclick='document.getElementById("top").scrollIntoView({behavior: "smooth"});' class="smoothScroll">HOME</a></li>
                    <li><a href="#features" onclick='document.getElementById("features").scrollIntoView({behavior: "smooth"});' class="smoothScroll">Vision</a></li>
                    <li><a href="#about" onclick='document.getElementById("about").scrollIntoView({behavior: "smooth"});' class="smoothScroll">ABOUT</a></li>
                    <li><a href="#team" onclick='document.getElementById("team").scrollIntoView({behavior: "smooth"});' class="smoothScroll">OUR PROGRAMMES</a></li>
                    <li><a href="#portfolio" onclick='document.getElementById("portfolio").scrollIntoView({behavior: "smooth"});' class="smoothScroll">RECENT PROJECT</a></li>
                    <li><a href="#contact" class="smoothScroll" onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'>DONATE</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end templatemo navigation -->
    <section id="home" class="text-center">
        <div class="templatemo_headerimage">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('images/hos.png') }}" alt="Slide 1">
                        <div class="slider-caption">
                            <div class="templatemo_homewrapper">
                                <h1>Orange health Initiative</h1>
                                <!-- <h2>Web Design &amp; code your dream</h2> -->
                                <a href="#portfolio" class="smoothScroll templatemo-slider-btn btn btn-default" onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'>Donate</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/hos2.png') }}" alt="Slide 2">
                        <div class="slider-caption">
                            <div class="templatemo_homewrapper">
                                <h1 style="color: #ff4500;">Making quality Healthcare Accessible to ALL</h1>
                                <!-- <h2>Work on all modern browsers, IE 10+</h2> -->
                                <a href="#team" class="smoothScroll templatemo-slider-btn btn btn-default" onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'>Donate</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/slider/image.png') }}" alt="Slide 3">
                        <div class="slider-caption">
                            <div class="templatemo_homewrapper">
                                <h1>Health is life...Health is everything</h1>
                                <!-- <h2>unsplash.com, flexslider, bootstrap, jquery</h2> -->
                                <a href="#about" class="smoothScroll templatemo-slider-btn btn btn-default" onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'>Donate</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- start templatemo features -->
    <section id="features" class="features text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>Vision</h2>
                    <p>Making Quality <span class="blue"> Healthcare</span><span class="green"> Available</span> to All</p>
                </div>
                <div class="col-md-12"></div>
                <div class="col-sm-6 col-md-3">
                    <a href="#"><i class="fa fa-ambulance"></i></a>
                    <h3>Quality in Health</h3>
                    <!-- <p>Providing quality healthcare in both primary and secondary healthcare services.</p> -->
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#"><i class="fa fa-hospital-user"></i></a>
                    <h3>Primary & Secondary Healthcare Services</h3>
                    <!-- <p>Etiam elementum laoreet mauris. Ut rutrum feugiat neque. Cum sociis natoque penatibus et magnis dis parturient montes.</p> -->
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#"><i class="fa fa-briefcase-medical"></i></a>
                    <h3>Appropriate Technology</h3>
                    <!-- <p>Ut rutrum feugiat neque. Etiam elementum laoreet mauris. Cum sociis natoque penatibus et magnis dis parturient montes.</p> -->
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#"><i class="fa fa-clinic-medical"></i></a>
                    <h3>Health Determinant Improvement</h3>
                    <!-- <p>Cum sociis natoque penatibus et magnis dis parturient montes. Etiam elementum laoreet mauris. Ut rutrum feugiat neque.</p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- end templatemo features -->

    <!-- start templatemo about -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <h2>ABOUT US</h2>
                    <p>Orange Health Initiative (OHI) is a non-governmental healthcare service foundation passionate about making QUALITY HEALTHCARE AFFORDABLE AND ACCESSIBLE to a large spectrum of people especially the vulnerable and less privileged in line with the Objective of the Sustainable Development Goal (SDG)Universal Health Coverage(UHC) . OHI renders healthcare services and support to the most in need groups in Nigeria including children, Women adults and the elderly.<span id="dots">...</span><span id="more"> <br>
                            We are a consortium of Medical, Global and Public Health as well as Project Management Expert who are passionate and want to make Quality healthcare Accessible and Affordable to the most vulnerable groups and we continue to advocate as well as innovate to proffer solutions to access to quality healthcare and financing.
                            OHI progammes, though diverse, cuts across two main themes, Healthcare Access and Healthcare Financing, this theme covers the 5 main domains of Public Health Viz, Epidemiology, Health Promotion, Health Administration, Bio-Statistics, and Occupational and Environmental health. <br>
                            Our team of experts is Men and Women with National, Pan African and Global experience.
                        </span></p>
                    <button onclick="myFunction()" class="smoothScroll templatemo-slider-btn btn btn-default" id="myBtn">Read more</button>
                </div>
                <div class="col-md-12"></div>
                <div class="col-sm-6 col-md-6 info">
                    <h3>We are COMPOSITE</h3>
                    <h4>Orange Health Initiative</h4>
                    <p>Orange health initiative is looking at providing healthcare for the needy and less priviledge, most especially the old and infirm in the society particularly those suffering from one terminal illness or the other</p>
                    <p>Your donation(s) goes a long way into making this a reality as you help consider the fact that most Nigerians have little or no solid access to good health care and are are being affected by some terminal illness. <a href="">donate now</a></p>
                </div>
                <div class="col-sm-6 col-md-6 skills">
                    <span>Quality in Health</span>
                    <span class="pull-right"></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                    <span>Primary and Secondary Healthcare Services</span>
                    <span class="pull-right"></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                    <span>Appropriate Technology in healthcare</span>
                    <span class="pull-right"></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                    <span>Health Determinant Improvement</span>
                    <span class="pull-right"></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end templatemo about -->

    <!-- start templatemo team -->
    <section id="team" class="text-center">
        <div class="container team-container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2>OUR PROGRAMMES</h2>
                    <p>Project Gray: Project Gray, our flagship medical outreach, is targeted to impact lives and minds of the senior citizens who are in need of care. OHI recognizes and identifies with the challenges of our ageing communities in terms of access to qualitative affordable health care, exclusion from public and private health insurance benefit, difficulty in accessory pension and gratuity as well as lonesomeness. We also recognize the critical role that older people have played and can still play in national development even in old age and we have dedicated one of our core programs to meet this need. Project Gray 1.0 and 2.0 has attended to over 1600 senior citizens already in its third year.
                        Healthcare Partnerships/ Hospital Franchising: We work to developed initiatives and partnerships with health care providers in order to strategically increase access of the elderly, children, and women to quality healthcare. We have successfully partnered with Veteran Hospital, the first private geriatric hospital in Nigeria and a multispecialty hospital rendering cutting edge services to senior citizens in Nigeria.</p>
                    <!-- <p>Senior Citizens Health Fund: SCHIF is our innovative health insurance scheme which is taking shape and set to launch soon. We have successfully initiated process and dialogues to establish the Senior Citizens Health Fund which would help meet the healthcare financing needs of the above 60 who are left out of the traditional health insurance schemes.</p>
                    <p>Advocacy: OHI champions advocacy to increase access to quality and affordable healthcare of the most neglected population groups. For more than 3 years, we have championed speaking up for the elderly and aged in Nigeria. We have also effectively brought to the notice of the public the need to celebrate the contributions of our senior citizens and to give back to them by celebrating the World Elders Day (instituted by UN /WHO) in Nigeria. We also conduct workshops and seminars to promote health literacy in different settings.</p>
                    <p>Healthcare Programs Support: OHI in line with its mission to increase access to healthcare helps other NGOs, civil society groups and professional groups working in the healthcare space. OHI provides strategic planning and consulting, program/ project management, medical outreach coordination and fund raising services to help other organizations consolidate on their strengths and achieve their goals. OHI leverages on its network of experienced professionals, partners and sponsors to help others succeed.</p> -->
                </div>



                <div class="col-md-12">
                    <div class="col-sm-6 col-md-6">
                        <div class="image_thumb">
                            <img src="{{ asset('images/project/892015_1489727007906197_436166367496955223_o.jpg') }}" class="img-responsive" alt="work">
                            <div class="image_overlay">
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="image_thumb">
                            <img src="{{ asset('images/project/1920018_1489725024573062_3330437712474776728_n.jpg') }}" class="img-responsive" alt="work">
                            <div class="image_overlay">
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="col-sm-6 col-md-6">
                        <div class="image_thumb">
                            <img src="{{ asset('images/project/10329813_1489726967906201_4010460371663753889_o.jpg') }}" class="img-responsive" alt="work">
                            <div class="image_overlay">
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="image_thumb">
                            <img src="{{ asset('images/project/10295706_1489725017906396_1319934161006544688_n.jpg') }}" class="img-responsive" alt="work">
                            <div class="image_overlay">
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>





                <!-- <div class="col-md-12"></div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 1">
                    <h3>Dr. Kunle Megus</h3>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 2">
                    <h3>Dr Larry</h3>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 3">
                    <h3>Dr Desmond</h3>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 4">
                    <h3>Dr Rachel</h3>
                </div> -->
            </div>
        </div>
    </section>
    <!-- end templatemo team -->

    <!-- start templatemo portfolio -->
    <section id="portfolio">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2>OUR PROJECTS</h2>
                    <p><b>AJEGUNLE SOCIAL HEALTH PROGRAMME(ASHIP) <br>
                            1. ORANGE HEALTH MEDICAL CENTRE.
                        </b></p>
                    <p><b>Project Goal:</b> To improve the Quality Life (QoL) of the People of Ajegunle in Ajeromi Ifelodun LGA) through the set up a Sustainable, Accessible and Affordable, Quality Healthcare system with 60% of a population of 500,000 people registered in 3 yrs ( 2020 to 2023) that address the healthcare need as well as the Social determinant of ill health of the people</p>
                    <p><b>Project Objectives</b></p>
                    <div class="col-md-6 text-justify">
                        <li>To address the Social determinant of health of the registered population through Entrepreneurial and Research Scheme- Ajegunle Entrepreneurial Development and Research Scheme (A-EDRS)</li>
                        <li>To establish a Demand Creation , Social Marketing as well as Customer Services that registers 60% of the population, captures and retain 80% of the customers between 2020 to 2023) through a Ajegunle -Mobile Community Health Scheme (A-MCHESH)</li>
                    </div>
                    <div class="col-md-6 text-justify">
                        <li>To establish a Community Health Scheme that registers 60% (300,000) of the people -Ajegunle Community Health Scheme (A-CHS)</li>
                        <li>To establish a Community Health Centre that give quality, affordable and accessible primary and secondary health services to the people ( Orange Health Clinic)</li>
                        <li>To establish a Public Health Promotion and Prevention Scheme as a model of a sustained Health Financing model (A-PHPPS)</li>
                    </div>
                </div>
                <div class="col-md-12"></div>



                <div class="col-md-12">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="img-list">
                        <img src="{{ asset('images/gallery/1.jpg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/3.jpg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/2.jpeg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/13.jpeg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/8.jpg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/6.jpeg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/14.png') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/7.jpeg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/9.jpeg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/10.jpg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/11.jpeg') }}" class="img img-responsive col-md-6" alt="1" />
                        <img src="{{ asset('images/gallery/15.jpg') }}" class="img img-responsive col-md-6" alt="1" />
                        <!-- <img src="" alt="2" />
                        <img src="" alt="3" />
                        <img src="" alt="4" />
                        <img src="" alt="5" />
                        <img src="" alt="6" />
                        <img src="" alt="7" />
                        <img src="" alt="8" />
                        <img src="" alt="9" />
                        <img src="" alt="10" />
                        <img src="" alt="11" />
                        <img src="" alt="12" /> -->
                    </div>
                    <a href="#" class="prev pagination-btn">Page 1</a>
                    <a href="#" class="next pagination-btn">Page 2</a>

                </div>
            </div>
        </div>
    </section>
    <!-- end templatemo portfolio -->

    <!-- start templatemo contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <h2>DONATE</h2>
                    <p>Your donations gooes a long way to make the access of Nigerians to free health care a reality, be rest assured that your funds will be well maximised.</p>
                </div>
                <div class="col-md-12"></div>
                <!-- <div class="col-sm-6 col-md-4 address">
                    <h3>OUR ADDRESS</h3>
                    <p><i class="fa fa-phone"></i> 090-080-0980</p>
                    <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                    <p><i class="fa fa-globe"></i> <a href="#">http://www.company.com</a></p>
                    <p><i class="fa fa-map-marker"></i> 360 Aenean Quis Semper, Maecenas 10450</p>
                </div> -->
                <div class="col-sm-6 col-md-12">
                    <form action="{{route('continue_to_donate')}}" method="post" role="form">
                        @csrf
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" required placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" required placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input type="number" min="500" class="form-control" name="amount" placeholder="Amount (minimum of 500 [amount is in naira])">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" placeholder="Phone number">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Message (optional)"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="DONATE" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end templatemo contact -->

    <!-- start templatemo footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="social_icon">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/ORANGEHEALTH2" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/orangehealthinitiative/" class="fa fa-instagram"></a>
                    <a href="mailto:orangehealth12@gmail.com" class="fa fa-envelope"></a>
                </div>
                <p>Copyright © {{ date("Y") }} Your Company Name</p>
            </div>
        </div>
    </footer>
    <!-- end templatemo footer -->

    <!-- start back to top -->
    <a href="#top" class="go-top"><i class="fa fa-chevron-up fa-1x"></i></a>
    <!-- end back to top -->

    <script src="{{ URL::asset('js/jquery.js') }}" type="application/javascript"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}" type="application/javascript"></script>
    <script src="{{ URL::asset('js/smoothscroll.js') }}" type="application/javascript"></script>
    <script src="{{ URL::asset('js/jquery.flexslider.js') }}" type="application/javascript"></script>

    <!-- start templatemo back to top js -->
    <script>
        $(document).ready(function() {
            // FlexSlider 
            $('.flexslider').flexslider({
                animation: "fade",
                directionNav: false
            });

            // Show or hide the sticky footer button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.go-top').fadeIn(200);
                } else {
                    $('.go-top').fadeOut(200);
                }
            });
            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 300);
            })
        });
    </script>
    <!-- end templatemo back to top js -->

    <style>
        #more {
            display: none;
        }
    </style>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <style>
        .img-list,
        .pagination {
            float: left;
            clear: both;
            display: inline;
        }

        .img-list img {
            float: left;
            max-height: 300px;
            margin-top: 30px;
        }

        .img-list img:nth-child(4n-1) {
            clear: both;
        }

        .pagination-btn {
            background-color: #ff4500;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
    <script>
        var start = 0;
        var nb = 4;
        var end = start + nb;
        var length = $('.img-list img').length;
        var list = $('.img-list img');

        list.hide().filter(':lt(' + (end) + ')').show();


        $('.prev, .next').click(function(e) {
            e.preventDefault();

            if (($(this).hasClass('prev') && start > 0) || ($(this).hasClass('next') && end < length)) {

                if ($(this).hasClass('prev')) {
                    start -= nb;
                } else {
                    start += nb;
                }

                end = start + nb;

                if ((start / nb) < 1) {
                    $('a.prev').html('Page 1');
                } else {
                    $('a.prev').html('Page ' + (start / nb));
                }


                if (end + nb > length) {
                    $('a.next').html('Page ' + ((end / nb)));
                } else {
                    $('a.next').html('Page ' + ((end / nb) + 1));
                }
            }

            if (start == 0) list.hide().filter(':lt(' + (end) + ')').show();
            else list.hide().filter(':lt(' + (end) + '):gt(' + (start - 1) + ')').show();
        });
    </script>

</body>

</html>