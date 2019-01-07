@include('login.loginheader')
<body>


<section>
    <div class="container">

        @if(count($live)>0)
            <h3>Now streaming Live</h3>
            @foreach($live as $l)
                <p>{{$l->name}}</p>
                <a href="{{$l->link}}"> Watch live streaming</a>
                <br>
                <br>
            @endforeach
        @endif
    </div>
</section>

<section class="section1">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="#" class=""> <i class="active dm-icon fa fa-bars fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Responsive Layout</h4>
                        <hr>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->
        </div>
        <!-- large-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                        <a href="#" class=""> <i class="active dm-icon fa fa-laptop fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Creative Design</h4>
                        <hr>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->
        </div>
        <!-- large-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-right">
                        <a href="#" class=""> <i class="active dm-icon fa fa-book fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Easy to Setup</h4>
                        <hr>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->
        </div>
        <!-- large-4 -->
    </div>
    <!-- end container -->
</section>
<!-- end section -->

<section class="section5">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 columns">
            <div class="widget" data-effect="slide-left">
                <img src="assets/img/slider_02.png" alt="">
            </div>
            <!-- end widget -->
        </div>
        <!-- large-6 -->
        <div class="col-lg-6 col-md-6 col-sm-12 columns">
            <div class="widget clearfix">
                <div class="services_lists">

                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-key fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Create an Account</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->

                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-download fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Upload Your Works</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard..</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->


                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon_none" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-dollar fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Earn Money</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->

                </div>
                <!-- services_lists -->
            </div>
            <!-- end widget -->
        </div>
        <!-- large-6 -->
    </div>
    <!-- end container -->
</section>
<!-- end section2 -->


<section class="section1 text-center">
    <div class="container">
        <div class="general-title">
            <h3>AFFORDABLE PRICES</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
                <div class="custom-box">
                    <div class="servicetitle">
                        <h4>Standard</h4>
                        <hr>
                    </div>
                    <div class="icn-main-container">
                        <span class="icn-container">$25</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <ul class="pricing">
                        <li>150 Mb Storage</li>
                        <li>1 Domain</li>
                        <li>2 Sub Domains</li>
                        <li>3 MySQL DBs</li>
                        <li>2 Emails</li>
                        <li>WordPress Installation</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a class="btn btn-primary" href="#">Order Now</a>
                </div>
                <!-- end custombox -->
            </div>
            <!-- end col-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
                <div class="custom-box">
                    <div class="servicetitle">
                        <h4>Mega Pack</h4>
                        <hr>
                    </div>
                    <div class="icn-main-container">
                        <span class="icn-container">$55</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <ul class="pricing">
                        <li>150 Mb Storage</li>
                        <li>1 Domain</li>
                        <li>2 Sub Domains</li>
                        <li>3 MySQL DBs</li>
                        <li>2 Emails</li>
                        <li>WordPress Installation</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a class="btn btn-primary" href="#">Order Now</a>
                </div>
                <!-- end custombox -->
            </div>
            <!-- end col-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
                <div class="custom-box">
                    <div class="servicetitle">
                        <h4>Ultra Pack</h4>
                        <hr>
                    </div>
                    <div class="icn-main-container">
                        <span class="icn-container">$98</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <ul class="pricing">
                        <li>150 Mb Storage</li>
                        <li>1 Domain</li>
                        <li>2 Sub Domains</li>
                        <li>3 MySQL DBs</li>
                        <li>2 Emails</li>
                        <li>WordPress Installation</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a class="btn btn-primary" href="#">Order Now</a>
                </div>
                <!-- end custombox -->
            </div>
            <!-- end col-4 -->

        </div>
    </div>
    <!-- end container -->
</section>
<!-- end section1 -->


@include('layouts.footer')
<!-- JavaScript Libraries -->
<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/php-mail-form/validate.js"></script>
<script src="assets/lib/prettyphoto/js/prettyphoto.js"></script>
<script src="assets/lib/isotope/isotope.min.js"></script>
<script src="assets/lib/hover/hoverdir.js"></script>
<script src="assets/lib/hover/hoverex.min.js"></script>
<script src="assets/lib/unveil-effects/unveil-effects.js"></script>
<script src="assets/lib/owl-carousel/owl-carousel.js"></script>
<script src="assets/lib/jetmenu/jetmenu.js"></script>
<script src="assets/lib/animate-enhanced/animate-enhanced.min.js"></script>
<script src="assets/lib/jigowatt/jigowatt.js"></script>
<script src="assets/lib/easypiechart/easypiechart.min.js"></script>

<!-- Template Main Javascript File -->
<script src="assets/js/main.js"></script>

</body>
</html>
