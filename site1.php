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
    <link rel="stylesheet" type="text/css" href="../public/css/site.css">
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
                    <form name="enquiry" action="regiter.php" method="post" onsubmit="return validateForm()">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12 center-heading">
                    <header class="heading">
                        <h1 class="page-title">32 Pinewood Drive</h1>
                    </header><!-- .page-header -->
                </div>
                <div id="primary" class="col-md-12">
                    <div class="row blog">
                        <div class="col-md-4">
                            <!-- <main id="main" class="site-main" role="main"> -->
                            <article id="post-828"
                                class="post-content post-828 post type-post status-publish format-standard has-post-thumbnail hentry category-32-pinewood-drive">


                                <div class="featured-image">
                                    <a href="../view/site2.php" rel="bookmark">
                                        <img width="100%" height="100%"
                                            src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-1038x576.jpg"
                                            class="attachment-nisarg-full-width size-nisarg-full-width wp-post-image"
                                            alt="32 Pinewood Drive"> </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-8">
                            <header class="entry-header">

                                <span class="screen-reader-text">32 Pinewood Drive Construction Updates February
                                    2019</span>
                                <h2 class="entry-title">
                                    <a href="../view/site2.php" rel="bookmark">32 Pinewood Drive Construction Updates
                                        May 2019</a>
                                </h2>

                                <div class="entry-meta">
                                    <h5 class="entry-date"><i class="fa fa-calendar-o"></i> <a href="../view/site2.php"
                                            title="9:32 am" rel="bookmark"><time class="entry-date"
                                                datetime="2019-05-28T09:32:13+00:00" pubdate="">May 28, 2019
                                            </time></a><span class="byline"><span class="sep"></span><i
                                                class="fa fa-user"></i>
                                            <span class="author vcard"><a class="url fn n"
                                                    href="../view/construction.php" title="View all posts by Admin"
                                                    rel="author">Admin</a></span></span>
                                        <i class="fa fa-comments-o"></i><span class="screen-reader-text">Comments
                                        </span> <a href="../view/site2.php" class="comments-link">0 Comment</a></h5>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                        </div>
                    </div>
                    <div class="row blog">

                        <div class="col-md-4">
                            <article id="post-737"
                                class="post-content post-737 post type-post status-publish format-standard has-post-thumbnail hentry category-32-pinewood-drive category-project">


                                <div class="featured-image">
                                    <a href="#" rel="bookmark">
                                        <img width="100%" height="100%"
                                            src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-1038x576.jpg"
                                            class="attachment-nisarg-full-width size-nisarg-full-width wp-post-image"
                                            alt="">
                                    </a>
                                </div>
                        </div>
                        <div class="col-md-8">
                            <div class="entry-header">

                                <span class="screen-reader-text">32 Pinewood Drive Construction Updates February
                                    2019</span>

                                <h2 class="entry-title">
                                    <a href="#" rel="bookmark">32 Pinewood Drive Construction Updates February 2019</a>
                                </h2>

                                <div class="entry-meta">
                                    <h5 class="entry-date"><i class="fa fa-calendar-o"></i> <a href="#" title="7:13 am"
                                            rel="bookmark"><time class="entry-date" datetime="2019-02-08T07:13:40+00:00"
                                                pubdate="">February 8, 2019
                                            </time></a><span class="byline"><span class="sep"></span><i
                                                class="fa fa-user"></i>
                                            <span class="author vcard"><a class="url fn n" href="#"
                                                    title="View all posts by Admin" rel="author">Admin</a></span></span>
                                        <i class="fa fa-comments-o"></i><span class="screen-reader-text">Comments
                                        </span> <a href="#" class="comments-link">0 Comment</a></h5>
                                </div><!-- .entry-meta -->
                            </div><!-- .entry-header -->
                        </div>

                    </div>
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
                    <h5>32 Pinewood Drive Location.</h5>
                    <div class="textwidget">
                        <address style="margin-top: 14px;"><i class="fa fa-map-marker"></i><span> Phase 3,
                            </span><br>
                            <span class="nxtln">Hinjewadi, Rajiv Gandhi Infotech park,</span><br>
                            <span class="nxtln"> Hinjewadi, Pune</span><br>
                            <span class="nxtln"> Maharastra- 411033</span>
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