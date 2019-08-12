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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" type="text/css" href="../public/css/pine.css">
    <link rel="stylesheet" type="text/css" href="../public/css/site2.css">
    <script src="../public/js/pine.js"></script>
    <style>
        img.logo-navbar {
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
                        <a class="nav-link" href="../view/about.php">ABOUT US</a>
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

    <!-- body site update start -->

    <div class="bg-image">
        <img class="img-fluid" src="../public/images/blog2.jpg" alt="img-responsive">
        <h1 class="text-center">Construction Updates</h1>
        <p class="colored-line"></p>
    </div>


    <div id="content" class="site-content">
        <div class="container blog">
            <div class="row">
                <div id="primary" class="col-md-12">
                    <main id="main" role="main">

                        <article id="post-828"
                            class="post-content post-828 post type-post status-publish format-standard has-post-thumbnail hentry category-32-pinewood-drive">


                            <div class="featured-image">
                                <img width="100%" height="100%"
                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-1038x576.jpg"
                                    class="attachment-nisarg-full-width size-nisarg-full-width wp-post-image"
                                    alt="32 Pinewood Drive">
                            </div>

                            <header class="entry-header">
                                <span class="screen-reader-text">32 Pinewood Drive Construction Updates May 2019</span>
                                <h1 class="entry-title">32 Pinewood Drive Construction Updates May 2019</h1>

                                <div class="entry-meta">
                                    <h5 class="entry-date"><i class="fa fa-calendar-o"></i> <a
                                           
                                            title="9:32 am" rel="bookmark"><time class="entry-date"
                                                datetime="2019-05-28T09:32:13+00:00" pubdate="">May 28, 2019
                                            </time></a><span class="byline"><span class="sep"></span><i
                                                class="fa fa-user"></i>
                                            <span class="author vcard"><a class="url fn n"
                                                    
                                                    title="View all posts by Admin" rel="author">Admin</a></span></span>
                                        <i class="fa fa-comments-o"></i><span class="screen-reader-text">Comments
                                        </span> <a
                                            href="https://www.namratagroup.com/site-updates/32-pinewood-drive/32-pinewood-drive-construction-updates-may-2019#respond"
                                            class="comments-link">0 Comment</a></h5>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>&nbsp;</p>

                                <div id="gallery-1" class="row">
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive17.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive17-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-827"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-827">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive16.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive16-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-826"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-826">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive15.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive15-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-825"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-825">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive14.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive14-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-824"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-824">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive13.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive13-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-823"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-823">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive12.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive12-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-822"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-822">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive11.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive11-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-821"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-821">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive10.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive10-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-820"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-820">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive9.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive9-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-819"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-819">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive8.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive8-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-818"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-818">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive7.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive7-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-817"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-817">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive6.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive6-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-816"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-816">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive5.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive5-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-815"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-815">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon portrait">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive4.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive4-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-814"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-814">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon portrait">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive3.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive3-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-813"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-813">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg-3 col-md-4 col-6 gallery-item">
                                        <div class="gallery-icon portrait">
                                            <a
                                                href="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive2.jpg"><img
                                                    width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive2-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-812"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-812">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                    <figure class="col-lg- col-md-4 col-sm-4 gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a href="#"><img width="150" height="150"
                                                    src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="32 Pinewood Drive"
                                                    aria-describedby="gallery-1-811"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption" id="gallery-1-811">
                                            32 Pinewood Drive
                                        </figcaption>
                                    </figure>
                                </div>

                                <p>&nbsp;</p>

                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </main><!-- #main -->

                </div><!-- #primary -->


            </div>
            <!--.row-->
        </div>
        <!--.container-->
    </div>



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

</html>