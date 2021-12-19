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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="coming_soon.php">carnival</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li>
                                <button type="button" class="btn bg-theme1 nav-btn" data-toggle="modal" aria-pressed="false"
                                    data-target="#exampleModal" id="loginner">
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
    <!-- banner -->
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li class="banner banner1">
                <div class="container">
                    <div class="banner-text">
                        <div class="slider-info">
                            <span>here's what we think.</span>
                            <h4>focus & simplicity</h4>
                            <h3>a fairly universal design</h3>
                            <div class="d-flex">
                                <a href="#about" class="text-capitalize serv_link btn bg-theme2 text-dark scroll">explore
                                    now</a>
                                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="serv_link btn bg-theme ml-3 w3_pvt-link-bnr scroll text-white">
                                    Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- //banner -->
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
                    <p class="mt-3">The <?php echo $user['site_name'] ?> Store Is the Place to Find Stylish Clothing at Affordable Prices.Discover the latest fashion trends with us. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from our stores.</p>

                    <a href="#more" class="text-capitalize serv_link btn bg-theme1 scroll mt-4">view more <span class="fa fa-arrow-right"
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
    <!-- more  -->
    <div class="services py-4 py-md-5" id="more">
        <div class="container py-lg-5">
            <div class="title-desc">
                <h3 class="main-title-w3pvt text-center text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                            aria-hidden="true"></span></sup>some more</h3>
                <span class="line-wthree"></span>
            </div>
            <div class="row py-md-5">
                <div class="col-lg-3 col-6 team-grids">
                    <div class="services-grid-w3ls">
                        <img src="images/p7.jpg" alt="img" class="img-fluid">
                    </div>

                    <div class="serv-desc-w3ls mt-3">
                        <h4>fashion</h4>
                        <p>electu iciend</p>
                    </div>

                </div>
                <div class="col-lg-3 col-6 team-grids">
                    <div class="services-grid-w3ls">
                        <img src="images/p2.jpg" alt="img" class="img-fluid">
                    </div>

                    <div class="serv-desc-w3ls mt-3">
                        <h4>elegant</h4>
                        <p>aliius orci</p>
                    </div>

                </div>
                <div class="col-lg-3 col-6 team-grids mt-lg-0 mt-4">
                    <div class="services-grid-w3ls">
                        <img src="images/p3.jpg" alt="img" class="img-fluid">
                    </div>

                    <div class="serv-desc-w3ls mt-3">
                        <h4>make over</h4>
                        <p>llam duimg</p>
                    </div>

                </div>
                <div class="col-lg-3 col-6 team-grids mt-lg-0 mt-4">
                    <div class="services-grid-w3ls">
                        <img src="images/p4.jpg" alt="img" class="img-fluid">
                    </div>

                    <div class="serv-desc-w3ls mt-3">
                        <h4>style</h4>
                        <p>vulputate ac</p>
                    </div>

                </div>
            </div>
            <div class="text-center">
                <a href="about.html" class="text-capitalize serv_link btn bg-theme2 text-dark mt-4">view more <span
                        class="text-theme1 fa fa-arrow-right" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <!-- //more -->
    <!-- slide -->
    <div class="slide-wthree">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 slide-left-wthree">
                    <div class="title-desc text-right">
                        <h3 class="main-title-w3pvt text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                                    aria-hidden="true"></span></sup><?php echo $user['site_name'] ?></h3>
                    </div>
                    <hr>
                    <p class="mt-3 text-right">Here we try to get to satisfy our clients needs by bringing them the latest designs and brands praised all over the world.</p>
                    <div class="ml-auto text-right">
                        <a href="#more" class="text-capitalize serv_link btn bg-theme1 scroll mt-4">view more <span
                                class="fa fa-arrow-right" aria-hidden="true"></span></a>
                    </div>
                </div>
                <div class="col-lg-7 slide-right-bg"></div>
            </div>
        </div>
    </div>
    <!-- slide -->
    <!-- featured -->
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
    <!-- //featured -->
    <?php include('footer.php') ?>