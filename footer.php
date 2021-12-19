     <!-- contact phone -->
    <div class="contact-phone bg-theme1 py-4">
        <div class="container">
            <div class="d-md-flex justify-content-center">
                <p class="text-white">If you have any questions? <span class="ml-3 font-weight-bold">Call Us <?php echo $user['phone'] ?></span></p>
            </div>
        </div>
    </div>
    <!-- //contact phone -->
    <!-- footer top -->
    <div class="footer-top py-lg-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 text-center">
                    <h5 class="footer-top-title">latest posts</h5>
                    <ul class="post-links">
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 3 hrs ago
                        </li>
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 10 hrs ago
                        </li>
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 22 hrs ago

                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-12 text-center">
                    <h5 class="footer-top-title">links</h5>
                    <ul class="list-wthree-pvt">
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="about.php">
                                About Us
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="portfolio.php">
                                Portfolio
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="coming_soon.php">
                                carnival
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-sm-10 text-center">
                            <h5 class="footer-top-title text-md-left text-center">newsletter</h5>
                            <form class="subscribe-wthree subscribe_form">
                                <div class="subscribe-message text-center"></div>
                                <div class="d-flex subscribe-wthree-field"><label class="align-self-center">
                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                    </label>
                                    <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                                </div>
                               <div class="mx-auto">
                                    <button type="submit" id="subscribeBtn" class="btn btn-default w-50 mt-4 text-white" style="background:#000;border:1px solid #fff;color:#fff">
                                    <span class="fa fa-spinner fa-spin subscribe_spinner" style="display:none"></span>
                                    <span class="subscribe_text">subscribe</span>
                                </button>
                               </div>
                            </form>
                        </div>
                        <div class="col-sm-2 mt-3 mx-sm-auto text-center">
                            <div class="social-icons">
                                <ul class="social-icons footer-social">
                                    <li>
                                        <a href="<?php echo $user['facebook_link'] ?>">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $user['twitter_link'] ?>">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $user['facebook_link'] ?>">
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
                </div>
                <div class="col-lg-3 footer-logo mb-lg-0 mb-4 text-lg-right text-center">
                    <h2>
                        <a href="index.html" class="text-theme1"><?php echo $user['site_name'] ?></a>
                    </h2>
                    <ul class="d-flex flex-column">
                        <li>

                            <p class="d-inline"><?php echo $user['location'] ?><br> <a href="tel://<?php echo $user['phone'] ?>"><?php echo $user['phone'] ?></a>.</p>
                            <span class="fa fa-home ml-3"></span>
                        </li>
                        <li class="my-3">

                            <a href="mailto:<?php echo $user['email_address'] ?>" class="text-secondary"><?php echo $user['email_address'] ?></a>
                            <span class="fa fa-envelope-open ml-3"></span>
                        </li>
                        <li>

                            <p class="d-inline"><a href="tel://<?php echo $user['phone'] ?>"><?php echo $user['phone'] ?></a></p>
                            <span class="fa fa-phone ml-3"></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div> <!-- //footer top -->
    <!-- Login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme2">
                    <h5 class="modal-title " id="exampleModalLabel"><?php echo $user['site_name'] ?> | Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-theme1">
                    <form class="login_form">
                        <?php 
                               $email=$password='';
                               if(isset($_GET['email']) and isset($_GET['reset_password']))
                               {
                                 $email=$_GET['email'];
                                 $password=$_GET['reset_password'];
                               }
                            ?>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Email</label>
                            <input type="email" id="lemail" class="form-control border" placeholder="info@exambple.com " name="email" value="<?php echo $email; ?>"required="">
                            <span class="text-light lemail-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label text-white">Password</label>
                            <input type="password" value="<?php echo $password; ?>" id="lpassword" class="form-control border" placeholder="****" name="password" required="">
                            <span class="text-light lpassword-feedback"></span>
                        </div>
                        <div class="right-w3l">
                            <button type="submit" id="loginBtn" class="btn btn-default btn-block border text-white bg-theme1">
                                 <span class="fa fa-spinner fa-spin login_spinner" style="display:none"></span>
                                <span class="login_text">login</span>
                            </button>
                        </div>

                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3layouts">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right text-dark">
                                <a href="#" data-toggle="modal" data-target="#exampleModalLabel3" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center text-white">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white" >
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //Login modal -->
    <!-- Register modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel1"><?php echo $user['site_name'] ?> | Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="dismisser">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  bg-theme1">
                    <form class="register_form">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Name</label>
                            <input type="text" class="form-control border" placeholder="john mercy " name="name" id="name"
                                required="">
                            <span class="text-light name-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label text-white">Email</label>
                            <input type="email" class="form-control border" placeholder="username@email.com" name="email"
                                id="email" required="">
                            <span class="text-light email-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="password" id="password"
                                required="">
                            <span class="text-light password-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label text-white">Confirm Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Confirm Password"
                                id="cpassword" required="">
                            <span class="text-light cpassword-feedback"></span>
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3layouts">
                                <input type="checkbox" id="brand2" value="" required="">
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <button type="submit" id="registerBtn"class="btn btn-default btn-block border text-white bg-theme1">
                                 <span class="fa fa-spinner fa-spin register_spinner" style="display:none"></span>
                                <span class="register_text">register</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Forgotten password  modal -->
    <div class="modal fade" id="exampleModalLabel3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel1"><?php echo $user['site_name'] ?> | Forgotten Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="dismisser">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  bg-theme1">
                    <form class="forgotten_password_form">
                        <div class="message text-center"></div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label text-white">Email</label>
                            <input type="email" class="form-control border" placeholder="username@email.com" name="email"
                                id="femail" required="">
                                <span class="text-light femail-feedback"></span>
                        </div>
                        <div class="right-w3l">
                            <button type="submit" id="frgpswBtn" class="btn btn-default btn-block border text-white bg-theme1">
                                 <span class="fa fa-spinner fa-spin reset_spinner" style="display:none"></span>
                                <span class="reset_text">submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="cpy-right text-center">
                <p>© <?php echo date('Y') ?> <?php echo $user['site_name'] ?>. All rights reserved | Design by
                    <a href="https://mjtech.co.ke"> mjtech.</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <div class="fixed-action-btn">
          <a class="btn-floating btn-large red">
            <i class="fa fa-bars"></i>
          </a>
          <ul class="list-unstyled">
            <li><a href="<?php echo $user['whatsapp_link'] ?>" class="btn-floating green"><i class="fab fa-whatsapp"></i></a></li>
            <li><a  href="sms://<?php echo $user['phone'] ?>?body=<?php echo urlencode('greetings,how may i be of assistance?'); ?>"  class="btn-floating red darken-1"><i class="fa fa-envelope-open"></i></a></li>
            <li><a  href="<?php echo $user['facebook_link'] ?>"  class="btn-floating " style="background:#4267B2"><i class="fa fa-facebook-f"></i></a></li>
            <li><a  href="<?php echo $user['twitter_link'] ?>" class="btn-floating" style="background:##1DA1F2;"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo $user['instagram_link'] ?>" class="btn-floating" style="background:#8a3ab9"><i class="fab fa-instagram"></i></a></li>
          </ul>
    </div>
    <!-- // Register modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--  menu toggle -->
    <script src="js/menu.js"></script>
    <!-- Banner  Responsiveslides -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//code.tidio.co/yijtlq2xmcygrfhxlr5u7s30so7kl1w9.js" async></script>
    <script type="text/javascript">
    $(document).ready(function () {$('.fixed-action-btn').floatingActionButton(); $('.popup-with-zoom-anim').magnificPopup({type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: false, midClick: true, removalDelay: 300, mainClass: 'my-mfp-zoom-in'}); $('.popup-with-move-anim').magnificPopup({type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: false, midClick: true, removalDelay: 300, mainClass: 'my-mfp-slide-bottom'}); });
</script>
    <script type="text/javascript" src="js/script.js?v=12.8"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>