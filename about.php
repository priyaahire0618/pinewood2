<!DOCTYPE html>
<html lang="en">

<head>
    <title>32 Pinewood Drive</title>
    <meta charset="UTF-8">
    <meta name="description" content="32 Pinewood Drive">
    <meta name="keywords" content="PINEWOOD, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../public/css/about.css">
    <link rel="stylesheet" type="text/css" href="../public/css/pine.css">
    <script src="../public/js/pine.js"></script>
    <style>
        img.logo-navbar {
            /* width: 7rem !important;
                height: 7rem !important; */
            width: 50%;
            height: auto;
        }
    </style>
</head>


<body>
    <div id="header">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <a href="#" class="navbar-brand">
                <img src="../public/images/logo.png" class="logo-navbar" alt="Responsive image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../view/home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/Blog.php">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/construction.php">SITE UPDATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/Contact.php">CONTACT US</a>
                    </li>

                </ul>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                    Enquiry Now
                </button>
            </div>

        </nav>
    </div>

     <!-- Enquiry Modal start -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <form name="enquiry" action="register.php" method="post" onsubmit="return validateForm()">
                     <div class="form-group">
                         <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                         <div class="row">
                             <div class="col-md-1"></div>
                             <label for="formGroupExampleInput" class="bmd-label-floating col-md-9"> Name :
                             </label>
                         </div>
                         <div class="row">
                             <div class="col-md-1"></div>
                             <input type="text" placeholder="Amit shinde" class="form-control col-md-9"
                                 id="formGroupExampleInput" name="name" required *>
                         </div>

                     </div>
                     <div class="form-group bmd-form-group">
                         <!-- manually specified -->
                         <div class="row">
                             <div class="col-md-1"></div>
                             <label for="formGroupExampleInput2" class="bmd-label-floating col-md-9">Email :
                             </label>
                         </div>
                         <div class="row">
                             <div class="col-md-1"></div>
                             <input type="email" placeholder=" abc@gmail.com" required *
                                 class="form-control col-md-9" id="formGroupExampleInput2" name="email">
                         </div>
                     </div>
                     <div class="form-group">
                         <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                         <div class="row">
                             <div class="col-md-1"></div>
                             <label for="formGroupExampleInput" class="bmd-label-floating col-md-9">Phone :
                             </label>
                         </div>
                         <div class="row">
                             <div class="col-md-1"></div>
                             <input type="tel" placeholder="+91  " required * class="form-control col-md-9"
                                 id="formGroupExampleInput" pattern="[0-9]{10}" name="phone">
                         </div>

                     </div>
                     <div class="form-group">
                         <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                         <div class="row">
                             <div class="col-md-1"></div>

                             <select class="browser-default custom-select" name="intrested">
                                 <option selected>Intressed in</option>
                                 <option>1 BHK</option>
                                 <option>2 BHK</option>
                                 <option>3 BHK</option>
                             </select>
                         </div>
                     </div>
                     <hr>
                     <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
 
 <!--Enquiry Model ends here -->

 <section class="about-image no-padding about"
        style="background: #152560 url('https://www.namratagroup.com/img/about-image.jpg') no-repeat center;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 short-image-title">
                    <h1 class="second-color wow fadeInDown" style="color:black;font:bold;">About Us</h1>
                    <div class="short-title-separator"></div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">a</div>
                    <div class="col-md-12">

                        <div class="about-desc">
                            <p class="wow fadeInLeft">32 Pinewood Drive Group has been into
                                the
                                real estate business since
                                the
                                past 30 years and created a niche for itself in Talegaon, Kamshet and Pune.
                                &nbsp;32 Pinewood Drive Group caters to every segment of the society and makes the
                                dream
                                of
                                every
                                home buyer their very &nbsp;own and work in the same direction.
                                &nbsp; Their focus has been into developing premium residential townships,
                                commercial
                                complexes, lifestyle gated communities and affordable abodes. It firmly believes in
                                the
                                philosophy of ‘Think. Feel. Do’ for its customers, employees and its stakeholders.
                                The brand today has risen to become a brand known for innovation in design, assured
                                quality and cutting-edge engineering. Add to that a committed powerhouse of human
                                resource that's always eager to rise to the next level.
                                &nbsp;
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- vision section start -->
    <section class="section-light top-padding-45 section-both-shadow bottom-padding-45"
        style="z-index:90; background-color:#fff;">

        <div class="container vision wow fadeInRight" style="margin-top:50px;">
            <div class="row">
                <div class="col-xs-4 col-lg-4 grid-content margin-top-45">
                    <h3 class="text-center">Vision<span class="special-color">.</span></h3>
                    <div class="title-separator-primary2" style="height: 2px;"></div>
                    <div class="col-lg-12 visionx bottom-padding-45" style="margin-top: 30px;">
                        <p>With our innovative designs and use of modern engineering, we aim to be India's most
                            preferred real
                            estate firm that adds meaningful value to our clients dream home. Our team of expert
                            professionals
                            are constantly determined to give remarkable results. We aim to achieve customer
                            satisfaction by
                            providing well-occupied homes along with top-line designs and modern amenities, within
                            the
                            given
                            time frame.
                        </p>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-4 grid-content margin-top-45">
                    <h3 class="text-center">Mission<span class="special-color">.</span></h3>
                    <div class="title-separator-primary2" style="height: 2px;"></div>
                    <div class="col-lg-12 visionx bottom-padding-45" style="margin-top: 30px;">
                        <p>Our mission is to provide our clients with the highest standard of customer service, by
                            adding a team
                            of qualified real estate professional to maintaining complete transparency and accuracy
                            at
                            work.
                        </p>

                    </div>

                </div>
                <div class="col-xs-4 col-lg-4 grid-content margin-top-45">
                    <h3 class="text-center">Values<span class="special-color">.</span></h3>
                    <div class="title-separator-primary2" style="height: 2px;"></div>
                    <div class="col-lg-12 visionx bottom-padding-45" style="margin-top: 30px;">

                        <p>We believe our unaltered commitment to our values of quality, innovations, customer
                            satisfaction and
                            transparency has made us what we are. Commitment to excellent, ethical dealing and
                            transparency at
                            work are the values that are enshrined in our work culture. We believe our customers are
                            our
                            best
                            endorsers. We endeavor to exceed our customer's expectations by helping them live their
                            dream.
                        </p>

                    </div>


                </div>
            </div>
        </div>

    </section>

    <!-- footer start -->
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>CORPORATE OFFICE.</h5>
                    <div class="textwidget">
                        <address style="margin-top: 14px;"><i class="fa fa-map-marker"></i><span> Office No.
                                107</span><br>
                            <span class="nxtln"> 1st Floor</span><br>
                            <span class="nxtln"> Westeria Fortune</span><br>
                            <span class="nxtln"> Murunji Road, Bhumkar Chowk, Wakad, Pune - 411033</span>
                        </address>
                    </div>
                </div>


                <div class="col-sm-3">
                    <h5>Contact Us</h5>
                    <ul style="line-height: 1.3;">
                        <p><span><i class="fa fa-envelope fa-sm"></i><a href="#" title="email">
                                    imaginehomeland@gmail.com</a></span></p>
                        <p><span><i class="fa fa-phone"></i> (+91) 9850161144</span></p>
                        <p><span><i class="fa fa-phone"></i> (+91) 9850581144</span></p>
                        <p><span><i class="fa fa-phone"></i> (+91) 9923081144</span></p>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Authorized Channel Partner</h5>
                    <ul style="line-height: 1.3" ;>
                        <!-- <li><a href="#">Marketing Partner</a></li> -->
                        <li><a>Imagine Homeland</a></li>
                        <li><a> Office No.
                                107</a><br>
                            <span class="nxtln"> 1st Floor, Wisteria Fortune</span><br>
                            <span class="nxtln"> Murunji Road, Pune - 411033</span>
                            <p></p>
                        </li>
                        <li><a>MAHA RERA A52100013889</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Follow Us</h5>
                    <div class="social-networks">
                        <a href="#" class="twitter" style="font-size:20px;"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook" style="font-size:20px;"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google" style="font-size:20px;"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <a href="../view/Contact.php" class="btn btn-info" role="button">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2019 32 PinewoodDrive </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>