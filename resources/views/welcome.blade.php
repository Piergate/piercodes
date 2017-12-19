@extends('layouts.index')
@section('title', 'Piercodes Software House')

@section('content')
<!-- Piercodes Header Structure -->
<header class="headerSection">
    <!-- Background Video -->
    <video id="player" src=" {{asset('images/textvideo.mp4') }}" autoplay loop muted></video>
    <!-- Main Header Content Generic Div -->
    <div class="headerContent container">
        <!-- Logo and Navigation Menu Top Panel -->

        @include('navbar')
        <!-- Header Text Content -->
        <div class="row">
            <!-- Whole Header Text Content -->
            <div class="headerText">
                <div class="textArea col-md-6">
                    <h1>Our End Game is Complete Excellence.</h1>
                    <p>
                        <strong>Piercodes</strong> is mainly a software house and digital marketing agency. We believe in the high-quality 
                        production and the benefits it comes with. We're a part of digitality-fluent force that's improving economics, shifting
                        ndustries and elevating businesses just like yours!
                    </p>
                    <!-- Check Services Button -->
                    <a href="#services" class="headerLink"><i class="fa fa-check"></i>Check Our Services</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Us Structure -->
<section class="aboutUsSection" id="about">
    <div class="container-fluid">
        <!-- About Us Title -->
        <div class="row">
            <div class="aboutUsHeading">
                <h2 class="mainHeading">About <span>us</span> information</h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
        <!-- About Us Content -->
        <div class="row">
            <!-- Left CEO Profile Block -->
            <div class="ceoProfile col-md-4" data-aos="fade-right" data-aos-duration="1200">
                <img class="img-responisve" src=" {{asset('images/piercodes_logo.png')  }}" alt="Piercodes Logo">
                <span class="firstUnderline" style="color: white; margin-left: 0;">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline" style="color: white">ــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    

                <h3>Software House & Digital Marketing Agency</h3>
            </div>
            <!-- Right About Us Text Block -->
            <div class="aboutText col-md-8"  data-aos="fade-left" data-aos-duration="1200">
                <h1>Welcome to our agency!</h1>
                <h3>We're so excited that you are here :)! Give a glance at who we are!</h3>
                <p>
                    Our company is based on the principle of cooperation and distribution of tasks, we see that the successful work is the work of the expert in one area, so we have expanded our staff to include designer specialist sites, and programmer expert language PHP and frames their own work, expert social text media and other specialized SEO lift sites in search engine results. We believe that our business is a mirror of our professionalism, the biggest factor to attract more customers so we put all the possibilities we have in the service of all our business, every business and new site we are presenting express Piercodes company for programming and web design.                                
                </p>
            </div>
        </div>
    </div>        
</section>
<!-- Services Section Structure -->
<section class="servicesSection" id="services">
    <div class="container-fluid">
        <!-- Services Title -->
        <div class="row">
            <div class="servicesHeading">
                <h2 class="mainHeading">Services <span>we</span> provide</h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Main Services Structure -->
        <div class="row">
            <!-- Services Icons -->
            <div class="servicesIcons col-md-8">
                <ul class="servicesList">
                    <!-- Graphic Design Service -->
                    <li data-aos="fade-up" data-aos-duration="400">
                        <div class="serviceIcon"><i class="fa fa-paint-brush faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>Graphic Design</h3>
                            <span>Piercodes offers a wide range of graphic design services to assist businesses growth.</span>
                        </div>
                    </li>
                    <!-- Web Design Service -->
                    <li data-aos="fade-up" data-aos-duration="700">
                        <div class="serviceIcon"><i class="fa fa-desktop faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>Web Design</h3>
                            <span>We offer clean, responsive and modern-looking website design services.</span>
                        </div>
                    </li>
                    <!-- Web Development Service -->
                    <li data-aos="fade-up" data-aos-duration="900">
                        <div class="serviceIcon"><i class="fa fa-code faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>Web Development</h3>
                            <span>We are keen on website programming with latest technologies and unit tests.</span>
                        </div>
                    </li>
                    <!-- Mobile Development Service -->
                    <li data-aos="fade-up" data-aos-duration="1200">
                        <div class="serviceIcon"><i class="fa fa-tablet faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>Mobile Development</h3>
                            <span>Our developers create solutions that work seamlessly across all mobile operating systems.</span>
                        </div>
                    </li>
                    <!-- SEO Service -->
                    <li data-aos="fade-up" data-aos-duration="400">
                        <div class="serviceIcon"><i class="fa fa-line-chart faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>SEO Services</h3>
                            <span>We've SEO masters who can high-rank your application in top search engines.</span>
                        </div>
                    </li>
                    <!-- Digital Marketing Service -->
                    <li data-aos="fade-up" data-aos-duration="700">
                        <div class="serviceIcon"><i class="fa fa-pie-chart faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>Digital Marketing</h3>
                            <span>We offer high quality digital marketing and social media services to improve businesses.</span>
                        </div>
                    </li>
                    <!-- Business Development Service -->
                    <li data-aos="fade-up" data-aos-duration="1200">
                        <div class="serviceIcon"><i class="fa fa-bar-chart faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>Business Dev</h3>
                            <span>With business experts, we offer you our services of business development to help you grow.</span>
                        </div>
                    </li>
                    <!-- Business Development Service -->
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="serviceIcon"><i class="fa fa-shopping-cart faa-pulse animated-hover"></i></div>
                        <div class="serviceInfo">
                            <h3>E-Commerce</h3>
                            <span>E-Commerce applications development and marketing services.</span>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Why to Pick us -->
            <div class="pickUs col-md-4">
                <h3>Why to pick us!</h3>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــ</span>
                <ul>
                    <li><i class="fa fa-star"></i>We seek bringing high-quality products.</li>
                    <li><i class="fa fa-star"></i>We care about the performance and security of apps.</li>
                    <li><i class="fa fa-star"></i>We have highly qualified developers and team.</li>
                    <li><i class="fa fa-star"></i>Excellent customer service we have.</li>
                    <li><i class="fa fa-star"></i>Periodic apps maintainence.</li>
                    <li><i class="fa fa-star"></i>Applications are written with perfectly clean codes.</li>
                    <li><i class="fa fa-star"></i>Unit and acceptance testing are applied on apps.</li>
                    <li><i class="fa fa-star"></i>Clean and elegant user interfaces are provided.</li>
                    <li><i class="fa fa-star"></i>High-quality graphic design and visual elements.</li>
                    <li><i class="fa fa-star"></i>Reasonable prices compared to the given quality.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Projects Section Structure -->
@if($products->count() > 0)
<section class="projectsSection" id="portfolio">
    <div class="container-fluid">
        <!-- Projects Title -->
        <div class="row">
            <div class="projectsHeading">
                <h2 class="mainHeading">Check <span>our</span> previous work!</h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
        @foreach( $products as $product )
        <!-- Project 1 - Structure -->
        @if( $loop->iteration %2 !== 0)
        <div class="row">
            <div class="projectTemplate">
                <div class="souqWebProjectPic col-md-5" data-aos="flip-left" data-aos-duration="1500" style= "background-image: linear-gradient(to right, rgba(125, 87, 99, 0.7), rgba(115, 176, 156, 0.8)), url("{{ asset('app-images/'.$product->image->avater)}}") !important; ">

                    <a href="{{url('/product_details'.'/'.$product->slug) }}" target="_blank">Project Details</a>
                </div>
                <div class="rightProjectInfo col-md-7">
                    <div class="projectText">
                        <h4 data-aos="fade-right" data-aos-duration="700">{{ $product->category->name}}</h4>
                        <h1 data-aos="fade-right" data-aos-duration="1200">{{ $product->title}}</h1>
                        <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                        <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>        
                        <p data-aos="fade-right" data-aos-duration="2000">{{ $product->description}}.</p>
                        <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                        <h2 data-aos="fade-right" data-aos-duration="2200">Customer Rating</h2>
                        <span class="secondUnderline" style="color: #73b09c">ــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                        <span class="customerSpan" data-aos="fade-right" data-aos-duration="2600">The customer has rated this with:</span>
                        <div class="rateStars" data-aos="fade-right" data-aos-duration="2900">
                            @for ($i = 0; $i < 5 ; $i++)
                            @if($i >= $product->rate )
                            <i class="fa fa-star greyStar"></i>
                            @else
                            <i class="fa fa-star"></i>
                            @endif
                            @endfor
                        </div>
                        <!-- <button class="customerQuoteButton" data-aos="fade-right" data-aos-duration="1000">Customer Quote<i class="fa fa-sort-desc" aria-hidden="true"></i></button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project 1 - Structure -->
        <!-- Project 2 - Structure -->
        @else

        <div class="row">
            <div class="projectTemplate">
                <div class="maysaraProjectPic pull-image-right col-md-5" data-aos="flip-left" data-aos-duration="1500" style="background-image: linear-gradient(to right, rgba(125, 87, 99, 0.7), rgba(115, 176, 156, 0.8)), url('../app-images/{{ $product->image->avater }} ')  !important;">
                    <a href="{{url('/product_details'.'/'.$product->slug) }}" target="_blank">Project Details</a>
                </div>
                <div class="rightProjectInfo col-md-7">
                    <div class="projectText">
                        <h4 data-aos="fade-right" data-aos-duration="700">{{ $product->category->name}}</h4>
                        <h1 data-aos="fade-right" data-aos-duration="1200">{{ $product->title}}</h1>
                        <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                        <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>        
                        <p data-aos="fade-right" data-aos-duration="2000">
                            {{ $product->description}} .
                        </p>
                        <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                        <h2 data-aos="fade-right" data-aos-duration="2200">Customer Rating</h2>
                        <span class="secondUnderline" style="color: #73b09c">ــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                        <span class="customerSpan" data-aos="fade-right" data-aos-duration="2600">The customer has rated this with:</span>
                        <div class="rateStars" data-aos="fade-right" data-aos-duration="2900">
                            @for ($i = 0; $i < 5 ; $i++)
                            @if($i >= $product->rate )
                            <i class="fa fa-star greyStar"></i>
                            @else
                            <i class="fa fa-star"></i>
                            @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- End Project 2 - Structure -->
        @endforeach

    </div>
</section>
@else
@endif
<section class="projectsBrandingSection">
    <div class="container-fluid">
        <div class="row">
            <div class="projectsHeading">
                <h2 class="mainHeading">Graphic <span>Design</span> Projects</h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
        <div class="row">
            <div class="brandingWorkList">
                <ul>
                    <li data-aos="flip-up">
                        <a data-height='720' data-lighter='images/branding_maysaraLogom.jpg' data-width='1280' href='images/branding_maysaraLogom.jpg'><img src=" {{asset('images/branding_maysaraLogo.jpg') }}" alt="Maysara Logo" /></a>
                        <div class="middle">
                            <div class="text"><p>Click on the image to zoom in</p></div>
                        </div>
                        <div class="overlay"></div>
                    </li><li data-aos="flip-up">
                        <a data-height='720' data-lighter='images/branding_maysram.jpg' data-width='1280' href='images/branding_maysram.jpg'><img src=" {{asset('images/branding_maysra.jpg') }}" alt="Maysara Branding" /></a>
                        <div class="middle">
                            <div class="text"><p>Click on the image to zoom in</p></div>
                        </div>
                    </li><li data-aos="flip-up">
                        <a data-height='720' data-lighter='images/branding_cardm.jpg' data-width='1280' href='images/branding_cardm.jpg'><img src=" {{asset('images/branding_card.jpg') }}" alt="Piercodes Card" /></a>
                        <div class="middle">
                            <div class="text"><p>Click on the image to zoom in</p></div>
                        </div>
                    </li><li data-aos="flip-up">
                        <a data-height='720' data-lighter='images/branding_cupm.jpg' data-width='1280' href='images/branding_cupm.jpg'><img src=" {{asset('images/branding_cup.jpg') }}" alt="Piercodes Cup" /></a>
                        <div class="middle">
                            <div class="text"><p>Click on the image to zoom in</p></div>
                        </div>
                    </li><li data-aos="flip-up">
                        <a data-height='720' data-lighter='images/branding_eid1m.jpg' data-width='1280' href='images/branding_eid1m.jpg'><img src=" {{asset('images/branding_eid1.jpg') }}" alt="Eid Mubarak" /></a>
                        <div class="middle">
                            <div class="text"><p>Click on the image to zoom in</p></div>
                        </div>
                    </li><li data-aos="flip-up">
                        <a data-height='720' data-lighter='images/branding_eid2m.jpg' data-width='1280' href='images/branding_eid2m.jpg'><img src=" {{asset('images/branding_eid2.jpg') }}" alt="Eid Mubarak" /></a>
                        <div class="middle">
                            <div class="text"><p>Click on the image to zoom in</p></div>
                        </div>
                    </li>
                </ul>
                <div class="container">
                    <div class="row">
                        <div class="img-zoomer">
                            <img src=" {{asset('images/branding_maysram.jpg') }}" alt="Maysara Branding">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('getInTouchSection')
<!-- Our Clients Section -->
<section class="clientsSection" id="ourclients">
    <!-- Clients Title -->
    <div class="container-fluid">
        <div class="row">
            <div class="ourClientsHeading">
                <h2 class="mainHeading">our<span> awesome</span> clients!</h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
    </div>
    <!-- Clients List -->
    <div class="container">
        <div class="row">
            <div class="ourClientsList">
                <ul>
                    <li data-aos="fade-right" data-aos-duration="400"><img src=" {{asset('images/sellepier_logo.png') }}" alt="Seller Pier Logo" /></li>
                    <li data-aos="fade-right" data-aos-duration="1000"><img src=" {{asset('images/souqnaql_logo.png') }}" alt="Souq Naql Logo" /></li>
                    <li data-aos="fade-right" data-aos-duration="1600"><img src=" {{asset('images/rhino_logo.png') }}" alt="Rhino Logo" /></li>
                    <li data-aos="fade-right" data-aos-duration="1600"><img src=" {{asset('images/piergate.png') }}" alt="Piergate Logo" /></li>
                    <li data-aos="fade-right" data-aos-duration="1600"><img src=" {{asset('images/Maysara.png') }}" alt="Maysara Logo" /></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Social Media -->
<section class="socialFeedsSection">
    <!-- Social Media Feeds Title -->
    <div class="container-fluid">
        <div class="row">
            <div class="socialHeading">
                <h2 class="mainHeading">Follow us on<span> Social Media!</span></h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
    </div>
    <!-- Social Media Content -->
    <div class="container">
        <div class="row">
            <div class="socialMediaContent">
                <div class="col-md-6">
                    <iframe data-aos="fade-right" data-aos-duration="1500" src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpiercodes&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435"></iframe>                            
                </div>
                <div class="col-md-6">
                    <div class="socialText">
                        <h2 data-aos="fade-right" data-aos-duration="1900">It's very nice for us to have you as fan!</h2>                
                        <p data-aos="fade-right" data-aos-duration="2700">Our agency understands that the social media is key! In order for us to interact with our respectful clients and fans we've decided to be a part of these communities to share our thoughts, communicate with our fans and clients with advanced flexibility! That's why, we think, that being a part of your social media gives us the flexibility needed to communicate. So, we appreciate your next step! Having you as a fan of our social networks is something great to us. Thank you for taking the time to like our Facebook page, Twitter profile and LinkedIn profile.</p>
                        <div class="socialMediaShare">
                            <a data-aos="flip-up" href="https://www.facebook.com/piercodes/" target="_blank" class="facebookShare"><i class="fa fa-facebook"></i>Facebook Page</a>
                            <a data-aos="flip-up" href="https://www.linkedin.com/company-beta/18242143/" target="_blank" class="linkedInShare"><i class="fa fa-linkedin"></i>LinkedIn Profile</a>
                            <a data-aos="flip-up" href="https://www.instagram.com/piercodes/" target="_blank" class="instagramShare"><i class="fa fa-instagram"></i>Instagram Profile</a>
                            <a data-aos="flip-up" href="https://twitter.com/piercodes" target="_blank" class="twitterShare"><i class="fa fa-twitter"></i>Twitter Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section -->
<section class="contactUsSecion" id="contact">
    <div class="container-fluid">
        <!-- Contact Us Title -->
        <div class="row">
            <div class="contactUsHeading">
                <h2 class="mainHeading">Contact <span>Us</span> now!</h2>
                <span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
            </div>
        </div>
        <div class="row">
            <!-- Google Map EGY -->
            <div class="googleMap col-md-6"  data-aos="fade-right" data-aos-duration="3000">
                <h2><span>Egypt</span> Location</h2>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.695109589587!2d31.308995485280946!3d30.07427278187149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fb51ca4199b%3A0x8f8efffde70916cc!2z2KjYp9mG2YjYsdin2YXYpyDYrdix2Kgg2KPZg9iq2YjYqNix!5e0!3m2!1sar!2seg!4v1510579224626" width="800" height="600" style="border:0;" allowfullscreen></iframe>
            </div>
            <!-- Google Map USA -->
            <div class="googleMap col-md-6"  data-aos="fade-left" data-aos-duration="3000">
                <h2><span>USA</span> Location</h2>
                <span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.8640906509136!2d-82.3533991146684!3d28.18104848259813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2b0d298933709%3A0x4f9fd6d6557c34a3!2zMTYzOSBGZW5uc2J1cnkgQ3QsIFdlc2xleSBDaGFwZWwsIEZMIDMzNTQ02Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2seg!4v1511259669076" width="600" height="450" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</section>
@include('footer')
@endsection
