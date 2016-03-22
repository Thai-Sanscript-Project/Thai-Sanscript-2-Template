<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url() ?>inc/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>inc/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>inc/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url() ?>inc/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="<?php echo base_url() ?>inc/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url() ?>/demo/demo/index">Home</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/about_us">About Us</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/services">Services</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/portfolio">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="<?php echo site_url() ?>/demo/demo/#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url() ?>/demo/demo/blog_item">Blog Single</a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/pricing">Pricing</a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/error_404">404</a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/shortcodes">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/blog">Blog</a></li> 
                        <li class="active"><a href="<?php echo site_url() ?>/demo/demo/contact_us">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">About us</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">We are hiring</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Meet the team</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Copyright</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Terms of use</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Privacy policy</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Faq</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Blog</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Forum</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Documentation</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Refund policy</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Ticket system</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Web Development</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">SEO Marketing</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Theme</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Development</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Email Marketing</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Plugin Development</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Adipisicing Elit</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Eiusmod</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Tempor</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Veniam</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Exercitation</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Ullamco</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">Home</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">About Us</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">Faq</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url() ?>inc/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>inc/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>inc/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>inc/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url() ?>inc/js/main.js"></script>
    <script src="<?php echo base_url() ?>inc/js/wow.min.js"></script>
</body>
</html>