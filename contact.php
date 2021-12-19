
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
                            <li><a href="about.php">About</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
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
            <li class="breadcrumb-item active font-weight-bold" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <div class="contact-wthree" id="contact">
        <div class="container pt-md-5 pt-4">
            <div class="title-desc">
                <h3 class="main-title-w3pvt text-center text-theme1 text-capitalize"><sup><span class="fa fa-star-o"
                            aria-hidden="true"></span></sup>contact</h3>
                <span class="line-wthree"></span>
            </div>

            <div class="row py-lg-5 py-sm-4">
                <div class="col-lg-5 contact-left-w3layouts  my-auto">
                    <div class="w3layouts-contact-top">
                        <span class="sub-title mb-4 d-block">get in touch</span>
                        <ul class="d-flex flex-column">
                            <li>
                                <span class="fa fa-home mr-3 text-theme1"></span>
                                <p class="d-inline"><?php echo $user['location'] ?></p>
                            </li>
                            <li class="my-3">
                                <span class="fa fa-envelope-open mr-3 text-theme1"></span>
                                <a href="mailto:<?php echo $user['email_address'] ?>" class="text-secondary"><?php echo $user['email_address'] ?></a>
                            </li>
                            <li>
                                <span class="fa fa-phone mr-3 text-theme1"></span>
                                <p class="d-inline"><?php echo $user['phone'] ?></p>
                            </li>
                        </ul>
                        <hr>
                        <p>Do you need any help? here we got your back.Get in touch with us and we will provide feedback as soon as possible.For any queries and complaints and directions to our stores also dont hestitate to contact us.We value our clients and your satisfaction is our top priority.Thank you. </p>

                    </div>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4">
                    <div class="contact-form-wthreelayouts">
                        <div class="text-center">
                            <span class="sub-title"><?php echo $user['site_name'] ?> | Send us a note</span>
                        </div>
                        <hr>
                        <!-- register form grid -->
                        <div class="register-top1">
                            <form class="register-wthree contact_form" >
                                <div class="message text-center"></div>
                                <div class="form-group">
                                    <label>
                                        Your Name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Johnson" name="name" required="" id="cname">
                                    <span class="text-danger cname-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Email
                                    </label>
                                    <input class="form-control" type="email" placeholder="example@gmail.com" name="email"
                                        required="" id="cemail">
                                    <span class="text-danger cemail-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label>
                                        subject
                                    </label>
                                    <input class="form-control" type="text" placeholder="subject" name="subject" id="csubject" 
                                        required="">
                                    <span class="text-danger csubject-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Your message
                                    </label>
                                    <textarea placeholder="Type your message here" class="form-control"name="message"id="cmessage"></textarea>
                                    <span class="text-danger cmessage-feedback"></span>
                                </div>
                                <div class="form-group">
                                      <button type="submit" id="contactBtn" class="btn btn-info 1 text-white w-100 font-weight-boldbtn btn-w3layouts btn-block  bg-theme text-uppercase">
                                        <span class="fa fa-spinner fa-spin contact_spinner" style="display:none"></span>
                                        <span class="contact_text">send</span>
                                    </button>
                                </div>

                            </form>
                        </div>
                        <!--  //register form grid ends here -->
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365911!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1536917325197"
            allowfullscreen></iframe>
    </div>
    <!-- //contact -->
    <?php include('footer.php') ?>