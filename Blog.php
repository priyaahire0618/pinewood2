<!DOCTYPE html>
<html lang="en">

<head>
    <title>32 Pinewood Drive</title>
    <meta charset="UTF-8">
    <meta name="description" content="32 Pinewood Drive">
    <meta name="keywords" content="PINEWOOD, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" type="text/css" href="../public/css/Blog.css">
    <link rel="stylesheet" type="text/css" href="../public/css/pine.css">
    <script src="../public/js/pine.js"></script>

</head>
<style>
    img.logo-navbar {
        /* width: 7rem !important;
            height: 7rem !important; */
        width: 50%;
        height: auto;
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>



<body>
    <div class="header">
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






    <!-- Blogs section start -->
    <section class="contact-bg-header">
        <div class="bg-image">
            <div class="second-header">
                <h1 class="color" style="color:black">32 Pinewood Blog</h1>
                <p class="colored-line"></p>
            </div>

        </div>

        <div role="main" id="content" class="content-wrap" style="min-height: 1px;">
            <div class="container">
                <div id="primary" class="content-area col-md-8 post-list">
                    <main itemscope="" itemtype="#" id="main" class="site-main" role="main">




                        <article itemscope="" itemprop="blogPosts" itemtype="http://schema.org/BlogPosting"
                            class="border-bottom-hover post-1919 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: 5 things you should crosscheck before buying property from any company">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#"
                                        title="5 things you should crosscheck before buying property from any company">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/5-things-you-should-crosscheck-before-buying-property-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/5-things-you-should-crosscheck-before-buying-property-730x340.jpg"
                                                alt="5 things you should crosscheck before buying property from any company">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">25</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="http://schema.org/Person"
                                        class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32
                                                PinewoodGroup</a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">5 things you
                                        should crosscheck before buying property from any
                                        company</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>5 things you should crosscheck before buying property from any company Buying a
                                    property
                                    is
                                    the most crucial decision for a buyer. It becomes a challenging task because as you
                                    start
                                    shortlisting the properties you get more confused with so many companies, so many
                                    projects,
                                    amenities, offerings, locations and attractions.&nbsp;
                                </p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1922 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: Top locations of Pune to buy 2 bhk luxury homes.">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="Top locations of Pune to buy 2 bhk luxury homes.">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Top-locations-of-Pune-to-buy-2-bhk-luxury-homes-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Top-locations-of-Pune-to-buy-2-bhk-luxury-homes-730x340.jpg"
                                                alt="Top locations of Pune to buy 2 bhk luxury homes.">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">24</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="http://schema.org/Person"
                                        class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32
                                                PinewoodGroup</a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">Top locations of
                                        Pune to buy 2 bhk luxury homes.</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>Top locations of Pune to buy 2 bhk luxury homes. 2 bhk luxury homes are the new trend
                                    setters
                                    in Pune real estate market. Here, in Pune, you can find homes that will suit your
                                    needs
                                    in
                                    almost all the locations. However, there are only a few locations where you can find
                                    2
                                    bhk
                                    luxury</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1916 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: Trace the growth of Hinjewadi in under 3 minutes.">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="Trace the growth of Hinjewadi in under 3 minutes.">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Trace-the-growth-of-Hinjewadi-in-under-3-minutes-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Trace-the-growth-of-Hinjewadi-in-under-3-minutes-730x340.jpg"
                                                alt="Trace the growth of Hinjewadi in under 3 minutes.">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">22</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">Trace the growth
                                        of Hinjewadi in under 3 minutes.</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>Trace the growth of Hinjewadi in under 3 minutes. The growth of Hinjewadi is no
                                    secret.
                                    Pune,
                                    as a city, invites various talented individuals everyday in order to work at the
                                    Hinjewadi
                                    IT Hub. Everyday, thousands of people move to Pune. This gives rise to the need for
                                    residential spaces in the city.
                                </p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1912 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: The impact of Union Budget on real estate industry">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="The impact of Union Budget on real estate industry">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/The-impact-of-Union-Budget-on-real-estate-industrY-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/The-impact-of-Union-Budget-on-real-estate-industrY-730x340.jpg"
                                                alt="The impact of Union Budget on real estate industry">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">21</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32
                                                PinewoodGroup</a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">The impact of
                                        Union Budget on real estate industry</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>The impact of Union Budget on real estate industry As soon as the central government
                                    announced “Union Budget for 2019” it was crystal clear that the lion’s share is
                                    going to
                                    the
                                    infrastructure and allied development. The developers have not only accepted the
                                    budget
                                    and
                                    but have also appreciated it as it’s indeed a boost</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1909 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: The Namrata Community">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="The 32 Pinewood Community">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Namrata-Community-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Namrata-Community-730x340.jpg"
                                                alt="The Namrata Community">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">19</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">The
                                        32 Pinewood Group Community</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>The 32 Pinewood Community inewood Group is a customer centric enterprise. We believe
                                    in
                                    the
                                    dreams, aspirations and hopes of our customers and strive to match up to them. With
                                    all
                                    our
                                    people, processes and resources, we create the best in class and deliver it on time.
                                    The
                                    32 Pinewood Group Community will vouch for that.
                                </p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1906 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: What are young investors looking for in Pune real estate investment?">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#"
                                        title="What are young investors looking for in Pune real estate investment?">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/What-are-young-investors-looking-for-in-Pune-real-estate-investment-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/What-are-young-investors-looking-for-in-Pune-real-estate-investment-730x340.jpg"
                                                alt="What are young investors looking for in Pune real estate investment?">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">18</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">What are young
                                        investors looking for in Pune real estate
                                        investment?</a>
                                </h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>What are young investors looking for in Pune real estate investment? One can see
                                    various
                                    young investors in Pune Real Estate market, investing in properties. There has been
                                    a
                                    noticeable increase in the number of young investors over the years. There can be
                                    various
                                    reasons for this rise in the number and lots of factors</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1896 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: Benefits of staying in Talegaon for Hinjawadi IT professionals">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="Benefits of staying in Talegaon for Hinjawadi IT professionals">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Benefits-of-staying-in-Talegaon-for-Hinjawadi-IT-professionals-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Benefits-of-staying-in-Talegaon-for-Hinjawadi-IT-professionals-730x340.jpg"
                                                alt="Benefits of staying in Talegaon for Hinjawadi IT professionals">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">17</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">Benefits of
                                        staying in Talegaon for Hinjawadi IT
                                        professionals</a>
                                </h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>Benefits of staying in Talegaon for Hinjawadi IT professionals In the last few years,
                                    Pune
                                    city has emerged as one of the globally acknowledged IT hubs in India. Due to the
                                    immense
                                    growth and rapid development all around, the demand for real estate has also
                                    increased.
                                    With
                                    the growing population and demand, people are finding</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1900 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: Trace the growth of Tathawade in under 3 minutes.">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="Trace the growth of Tathawade in under 3 minutes.">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Trace-the-growth-of-Tathawade-in-under-3-minutes-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Trace-the-growth-of-Tathawade-in-under-3-minutes-730x340.jpg"
                                                alt="Trace the growth of Tathawade in under 3 minutes.">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">16</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">Trace the growth
                                        of Tathawade in under 3 minutes.</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>Trace the growth of Tathawade in under 3 minutes. The growth of Tathawade has taken
                                    everyone
                                    by surprise. From a developing locality of Pune to a full fledged developed and safe
                                    area
                                    for families, Tathawade has come a long way. If you keep an eye on this growth of
                                    Tathawade,
                                    you will realise that it</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1903 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: How Locations affect your health">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="How Locations affect your health">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/How-Locations-affect-your-health-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/How-Locations-affect-your-health-730x340.jpg"
                                                alt="How Locations affect your health">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">15</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">How Locations
                                        affect your health</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>How Locations affect your health One defining factor of choosing a dream home is its
                                    location. It is a crucial decision because location plays an important role in your
                                    life. It
                                    affects your physical and mental health in more ways than one. Let’s find out how.
                                    Work
                                    Life
                                    Balance A good and well-connected location saves</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <article itemscope="" itemprop="blogPosts" itemtype="#"
                            class="border-bottom-hover post-1887 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                            title="Blog post: Importance of Sports Amenities">
                            <header class="entry-header">

                                <div class="post-img-wrap">
                                    <a href="#" title="Importance of Sports Amenities">

                                        <picture itemscope="" itemprop="image">
                                            <source media="(max-width: 600px)"
                                                srcset="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Importance-of-Sports-Amenities-500x233.jpg">
                                            <img src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Importance-of-Sports-Amenities-730x340.jpg"
                                                alt="Importance of Sports Amenities">
                                        </picture>

                                    </a>
                                    <div class="post-date">
                                        <span class="post-date-day">13</span>
                                        <span class="post-date-month">Jul</span>
                                    </div>
                                </div>


                                <div class="entry-meta list-post-entry-meta">
                                    <span itemscope="" itemprop="author" itemtype="#" class="entry-author post-author">
                                        <span itemprop="name" class="entry-author author vcard">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a itemprop="url" class="url fn n" href="#" rel="author">32 PinewoodGroup
                                            </a>
                                        </span>
                                    </span>
                                    <span class="posted-in entry-terms-categories" itemprop="articleSection">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        Posted in <a href="#" rel="category tag">Blog</a> </span>
                                    <a href="#" class="post-comments">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        No comments </a>
                                </div><!-- .entry-meta -->

                                <h1 class="entry-title" itemprop="headline"><a href="#" rel="bookmark">Importance of
                                        Sports Amenities</a></h1>
                                <div class="colored-line-left"></div>
                                <div class="clearfix"></div>

                            </header><!-- .entry-header -->
                            <div itemprop="description" class="entry-content entry-summary">
                                <p>Importance of Sports Amenities Since past few years, with the evolving era of real
                                    estate,
                                    the requirements of today’s home-buyers are evolving as well. This has led to an
                                    increase in
                                    demand for unique and innovative living spaces with all the premium amenities.
                                    Amenities
                                    play a major role while choosing a property as they redefine</p>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->



                        <nav class="navigation posts-navigation" role="navigation">
                            <!-- <h2 class="screen-reader-text">Posts navigation</h2> -->
                            <div class="nav-links">
                                <div class="nav-previous"><a href="#">Older
                                        posts</a>
                                </div>
                            </div>
                        </nav>

                    </main><!-- #main -->
                </div><!-- #primary -->


                <div itemscope="" itemtype="http://schema.org/WPSideBar" role="complementary" aria-label="Main sidebar"
                    id="sidebar-secondary" class="col-md-4 widget-area">
                    <aside id="is_widget-2" class="widget widget_is_widget">
                        <h2 class="widget-title">Search Blog</h2>
                        <div class="colored-line-left"></div>
                        <div class="clearfix widget-title-margin"></div>
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <span class="screen-reader-text"></span>
                                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                            <input type="hidden" name="id" value="851"></form>
                    </aside>
                    <aside id="black-studio-tinymce-4" class="widget widget_black_studio_tinymce">
                        <h2 class="widget-title">FEATURED PROJECT</h2>
                        <div class="colored-line-left"></div>
                        <div class="clearfix widget-title-margin"></div>
                        <div class="textwidget">
                            <p><a href="#"><img class="alignnone wp-image-255 size-full"
                                        src="http://namratagroup.com/blog/wp-content/uploads/2019/02/Featured-Ads-english-01-optimized.jpg"
                                        width="281" alt="Happycity Talegaon Pune"></a></p>
                        </div>
                    </aside>
                    <aside id="black-studio-tinymce-5" class="widget widget_black_studio_tinymce">
                        <h2 class="widget-title">Looking for property? </h2>
                        <div class="colored-line-left"></div>
                        <div class="clearfix widget-title-margin"></div>
                        <div class="textwidget">
                            <form action="register.php" method="post" class="cust-contact-form" novalidate="novalidate">
                                <p><label> Name <span class="req">*</span><br>
                                        <input name="your-name" value="" size="40" class="" type="text"
                                            required="" name="name"></label>
                                </p>
                                <p><label> Phone <span class="req">*</span><br>
                                        <input name="phone" value="" size="40" class="" type="text" required="" name="phone"></label>
                                </p>
                                <p><label> Email <span class="req">*</span><br>
                                        <input name="your-email" value="" size="40" class="" type="email"
                                            required="" name="email"></label>
                                </p>
                               
                                <p><input value="Enquire Now" class="" type="submit"></p>
                                <!-- <a href="#" class="btn btn-info" role="button">Contact Us</a> -->
                            </form>
                        </div>
                    </aside>
                    <aside id="lptw-thumbnails-recent-posts-2" class="widget lptw_recent_posts_thumbnails_widget">
                        <h2 class="widget-title">Recent Blogs</h2>
                        <div class="colored-line-left"></div>
                        <div class="clearfix widget-title-margin"></div>
                        <ul class="lptw-recent-posts-thumbnails-widget">

                            <li>
                                <div class="lptw-post-small-thumbnail">
                                    <a href="#" class="lptw-thumbnail-link"><img width="100" height="100"
                                            src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/5-things-you-should-crosscheck-before-buying-property-150x150.jpg"
                                            class="attachment-100x100 size-100x100 wp-post-image"
                                            alt="Buying Property from any Company"></a>
                                    <div class="lptw-post-header">
                                        <a href="#" class="lptw-header-link">5 things you should crosscheck before
                                            buying
                                            property
                                            from
                                            any company</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="lptw-post-small-thumbnail">
                                    <a href="#" class="lptw-thumbnail-link"><img width="100" height="100"
                                            src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Top-locations-of-Pune-to-buy-2-bhk-luxury-homes-150x150.jpg"
                                            class="attachment-100x100 size-100x100 wp-post-image"
                                            alt="2 BHK Luxury homes"></a>
                                    <div class="lptw-post-header">
                                        <a href="#" class="lptw-header-link">Top locations of Pune to buy 2 bhk luxury
                                            homes.</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="lptw-post-small-thumbnail">
                                    <a href="#" class="lptw-thumbnail-link"><img width="100" height="100"
                                            src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Trace-the-growth-of-Hinjewadi-in-under-3-minutes-150x150.jpg"
                                            class="attachment-100x100 size-100x100 wp-post-image"
                                            alt="Growth of Hinjewadi"></a>
                                    <div class="lptw-post-header">
                                        <a href="#" class="lptw-header-link">Trace the growth of Hinjewadi in under 3
                                            minutes.</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="lptw-post-small-thumbnail">
                                    <a href="#" class="lptw-thumbnail-link"><img width="100" height="100"
                                            src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/The-impact-of-Union-Budget-on-real-estate-industrY-150x150.jpg"
                                            class="attachment-100x100 size-100x100 wp-post-image"
                                            alt="Union Budget"></a>
                                    <div class="lptw-post-header">
                                        <a href="#" class="lptw-header-link">The impact of Union Budget on real estate
                                            industry</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="lptw-post-small-thumbnail">
                                    <a href="#" class="lptw-thumbnail-link"><img width="100" height="100"
                                            src="https://www.namratagroup.com/blog/wp-content/uploads/2019/07/Namrata-Community-150x150.jpg"
                                            class="attachment-100x100 size-100x100 wp-post-image"
                                            alt="Namrata Community"></a>
                                    <div class="lptw-post-header">
                                        <a href="#" class="lptw-header-link">The 32 Pinewood Community</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div><!-- #sidebar-secondary -->

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

</html>