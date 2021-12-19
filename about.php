<?php include('header.php');?>
    <!-- header -->
    <div class="header-top text-md-left text-center">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="nav-sec  position-relative">
                    <a href="#menu" id="toggle">
                        <span></span>
                    </a>
                    <div id="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li>
                                <button type="button" class="btn bg-theme1 nav-btn" data-toggle="modal" aria-pressed="false"
                                    data-target="#exampleModal">
                                    Login
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1 class="wthree-logo">
                    <a href="index.php" id="logoLink"><?php echo $user['site_name'] ?></a>
                </h1>
                 <ul class="social-icons">
                    <li>
                        <a href="?php echo $user['facebook_link'] ?>">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $user['twitter_link'] ?>">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $user['instagram_link'] ?>">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $user['linkedin_link'] ?>">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- about-->
    <section class="wthree-row py-sm-5" id="about">
        <div class="container py-lg-5">
            <div class="row abbot-main py-lg-5 py-4">
                <div class="col-lg-5 about-text-grid text-left pr-lg-5">
                    <div class="title-desc">
                        <h3 class="main-title-w3pvt text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                                    aria-hidden="true"></span></sup><?php echo $user['site_name'] ?></h3>
                    </div>
                    <hr>
                    <p class="mt-3">Here we do cloths fashions,brandig and uclients are able to shop with us too.We are the top most store in northen gergia,Atlanta supplier of latest brands.Our products are highly rated by our customers.Feel free to shop with us.</p>

                    <a href="#services" class="text-capitalize serv_link btn bg-theme1 scroll mt-4">view more <span class="fa fa-arrow-right"
                            aria-hidden="true"></span></a>
                </div>
                <div class="col-lg-3 col-sm-6 abbot-right mt-lg-0 mt-3">
                    <img src="images/a3.jpg" class="img-fluid" alt="" />
                    <div class="border-pos-wthree1"></div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-3 abbot-right2">
                    <img src="images/a1.jpg" class="img-fluid" alt="" />
                    <div class="border-pos-wthree"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <!-- about bottom -->
    <div class="about-main-wthree">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 abt-left p-lg-0">
                    <div class="abt-right p-lg-0">
                        <div class="layer-agileits-left">
                            <div class="ab-right">
                                <div class="txt-ab-right">
                                    <h4>Vintage fashion style.</h4>
                                    <p>Modern vintage is a fashion trend that blends vintage-styled clothing with high-street clothing. Bold prints, high waist bottoms, and collared shirts are all part of what makes this modern look vintage inspired.</p>
                                    <a href="portfolio.html" class="text-capitalize serv_link btn bg-theme1 mt-4">view
                                        more <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="abt-left-top">
                                <div class="layer-agileits1">
                                    <div class="row">
                                        <div class="col-12 ab-grid-left">
                                            <h4>Casual fashion style</h4>
                                            <p>Nice outfit that looks put together and fashion- forward, but doesn't necessarily require formal slacks, a blazer, or a gown. A pair of nice pants and a nice, casual top (no t-shirts!) is a great casual outfit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-sm-0 mt-sm-0 mt-4">
                            <div class="abt-left-bottom">
                                <div class="layer-agileits2">
                                    <div class="row">
                                        <div class="col-12 ab-grid-left">
                                            <h4>Grunge style clothing</h4>
                                            <p>Grunge fashion is characterized by durable and timeless thrift-store clothing, often worn in a loose, androgynous manner to de-emphasize the silhouette. The style was popularized by music bands Nirvana, Soundgarden and Pearl Jam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-4 pr-lg-0">
                    <div class="abt-right-bg">
                        <div class="layer-agileits-right">
                            <div class="ab-right">
                                <div class="txt-ab-right">
                                    <h4>Bohemian fashion style</h4>
                                    <p>The style is a fashion style strongly related to hippie fashion, in which natural fabrics, retro patterns, neutrals and warm shades merge with 70s style accents and a flair for statement accessories.Try it today</p>
                                    <a href="portfolio.php" class="text-capitalize serv_link btn bg-white text-dark mt-4">view
                                        more <span class="fa fa-arrow-right text-dark" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about bottom -->
    <!-- more -->
    <div class="services py-4 py-md-5" id="services">
        <div class="container py-lg-5">
            <div class="title-desc">
                <h3 class="main-title-w3pvt text-center text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                            aria-hidden="true"></span></sup>featured</h3>
                <span class="line-wthree"></span>
            </div>
            <div class="row py-md-5 pt-4">
                <div class="col-lg-3 col-6 team-grids mb-lg-0  mb-4">
                    <div class="services-grid-w3ls">
                        <img src="images/p3.jpg" alt="img" class="img-fluid img-thumbnail">
                    </div>
                    <div class="serv-desc-w3ls mt-3 text-center">
                        <h4>make over</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 team-grids mb-lg-0  mb-4">
                    <div class="serv-desc-w3ls mb-3 text-center">
                        <h4>style</h4>
                    </div>

                    <div class="services-grid-w3ls">
                        <img src="images/p4.jpg" alt="img" class="img-fluid img-thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-6 team-grids">
                    <div class="services-grid-w3ls">
                        <img src="images/p1.jpg" alt="img" class="img-fluid img-thumbnail">
                    </div>
                    <div class="serv-desc-w3ls mt-3 text-center">
                        <h4>fashion</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 team-grids mt-sm-0 mt-4">
                    <div class="serv-desc-w3ls mb-3 text-center">
                        <h4>elegant</h4>
                    </div>
                    <div class="services-grid-w3ls">
                        <img src="images/p2.jpg" alt="img" class="img-fluid img-thumbnail">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="coming_soon.html" class="text-capitalize serv_link btn bg-theme2 text-dark mt-4">view more
                    <span class="text-theme1 fa fa-arrow-right" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <!-- //more -->
    <!-- count down -->
    <div class="count-down-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 count-down-bg">

                </div>
                <div class="col-lg-5 timer-sec">
                    <div class="row">
                        <div class="col-lg-8 my-auto order-lg-0 order-1">
                            <div class="title-desc text-right">
                                <h3 class="main-title-w3pvt text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                                            aria-hidden="true"></span></sup>carnival</h3>
                            </div>
                            <hr>
                            <p class="mt-3 text-right">We wish to welcome you to our offers day on our brand new store opening. We will provide 30% discount sale off on every product you shop from  us.What are you waiting ..Shop with us today.</p>
                            <div class="ml-auto text-right">
                                <a href="contact.html" class="text-capitalize serv_link btn bg-theme1  mt-4">view
                                    more
                                    <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-1 order-0">
                            <ul class="timer-wthree">
                                <li><span id="days">10</span>days</li>
                                <li><span id="hours">6</span>Hours</li>
                                <li><span id="minutes">12</span>Minutes</li>
                                <li><span id="seconds">08</span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //count down -->
    <!-- testimonials -->
    <div class="testimonials py-5" id="testi">
        <div class="container py-lg-5">
            <div class="title-desc">
                <h3 class="main-title-w3pvt text-center text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                            aria-hidden="true"></span></sup>testimonials</h3>
                <span class="line-wthree"></span>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide py-lg-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-12 testimonials_grid">
                                <div class="testi-text text-center">
                                    <p>Its such a nice place to get you dream fashion desigs.I love it.Thanks cholifebrand
                                    </p>
                                </div>
                                <div class="d-flex mt-md-5 mt-3 align-items-center justify-content-center">
                                    <div class="testi-img">
                                        <img src="images/ts1.jpg" alt=" " class="img-fluid rounded-circle" />
                                    </div>
                                    <div class="testi-desc ml-3">
                                        <h5 class="mb-2">Aliquyam</h5>
                                        <p>customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-12 testimonials_grid">
                                <div class="testi-text text-center">
                                    <p> I bought some products from them and indeed is as what they say.Nice quality,legit and nice looking.
                                    </p>
                                </div>
                                <div class="d-flex mt-md-5 mt-3 align-items-center justify-content-center">
                                    <div class="testi-im">
                                        <img src="images/ts2.jpg" alt=" " class="img-fluid rounded-circle" />
                                    </div>
                                    <div class="testi-desc ml-3">
                                        <h5 class="mb-2">Takimata</h5>
                                        <p>customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-12 testimonials_grid">
                                <div class="testi-text text-center">
                                    <p>they got the best offers in town.
                                    </p>
                                </div>
                                <div class="d-flex mt-md-5 mt-3 align-items-center justify-content-center">
                                    <div class="testi-img">
                                        <img src="images/ts3.jpg" alt=" " class="img-fluid rounded-circle" />
                                    </div>
                                    <div class="testi-desc ml-3">
                                        <h5 class="mb-2">Sanctus</h5>
                                        <p>customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    
    <?php include('footer.php') ?>