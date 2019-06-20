<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>XERO - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- CDN LINKS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom-style.css">

</head>
<body id="top">

<div class="page_loader"></div>

<!-- main header start -->
<?php include('includes/header.php'); ?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner submit-property-header overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Submit Property</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Submit Property</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- User page start -->
<div class="user-page submit-property content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="notification-box mb-60">
                    <h3>Don't Have an Account?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan.</p>
                </div>

                <div class="search-area contact-2">
                    <div class="search-area-inner">
                        <div class="search-contents ">


                            <form id="form1" method="GET">                           
                                <h3 class="heading">What type of listing you want to make</h3>
                                <div class="row mb-25">
                                    <div class="col-sm-3">	
                                        <input type="radio" name="radio" id="radio3" value="house" class="radio"/>
                                            <label class="bmg-radio-type" for="radio3"><div><i class="fa fa-home fa-2x"></i><br><span> House/Apartment</span></div></label>
                                    </div>
                                    <div class="col-sm-3">	
                                        <input type="radio" name="radio" id="radio4" value="room" class="radio"/>
                                        <label class="bmg-radio-type" for="radio4"><div><i class="fa fa-bed fa-2x"></i><br><span> Room(s)</span></div></label>
                                    </div>
                                </div>
                                <div class="row mb-50">
                                    <div class="col-sm-3">
                                        <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                        Next!
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <form id="form2" method="GET">
                                <h3 class="heading">What kind of property you have? House STEP 2</h3>
                                <div class="row mb-50">
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="selectpicker search-fields" name="house-type">
                                                <option>Apartment</option>
                                                <option>House</option>                                                
                                                <option>Annexed Housing</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Available From</label>
		                                <div class='input-group date' id='datepicker'>                                        
		                                <input type='text' class="form-control" />
		                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>		                                
		                                </div>
		                            </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Listing Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">

                                        <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                        Next!
                                        </button>
                                    </div>

                                </div> 
                            </form>

                            <form id="form3" method="GET">

                                <div class="row mb-50">

                                <h3 class="heading">How much you want to earn?</h3>                                                                

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <select class="selectpicker search-fields" name="contract1">
                                                <option>USD</option>
                                                <option>MXN</option>
                                                <option>EUR</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Contract</label>
                                            <select class="selectpicker search-fields" name="contract1">
                                                <option>1 Month</option>
                                                <option>2 Months</option>
                                                <option>3 Months</option>
                                                <option>4 Months</option>
                                                <option>5 Months</option>
                                                <option>6 Months</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control" placeholder="MXN (Mexican Pesos)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Contract</label>
                                            <select class="selectpicker search-fields" name="contract1">
                                                <option>1 Month</option>
                                                <option>2 Months</option>
                                                <option>3 Months</option>
                                                <option>4 Months</option>
                                                <option>5 Months</option>
                                                <option>6 Months</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control" placeholder="MXN (Mexican Pesos)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Contract</label>
                                            <select class="selectpicker search-fields" name="contract1">
                                                <option>1 Month</option>
                                                <option>2 Months</option>
                                                <option>3 Months</option>
                                                <option>4 Months</option>
                                                <option>5 Months</option>
                                                <option>6 Months</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control" placeholder="MXN (Mexican Pesos)">
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Deposit</label>
                                            <input type="text" name="price" class="form-control" placeholder="We suggest minimum 1 Month of Rent">
                                        </div>
                                    </div>
                                
                                <div class="col-sm-3">
                                        <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                        Next!
                                        </button>
                                    </div>
                                    </div>
                            </form>

                            <form id="form4" method="GET"></form>
                                <h3 class="heading">Property Gallery</h3>
                                <div class="row mb-60">
                                    <div class="col-lg-12">
                                        <div id="myDropZone" class="dropzone dropzone-design">
                                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="heading">Location</h3>
                                <div class="row mb-50">
                                    
                                <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Bedrooms</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>Choose City</option>
                                                <option>New York</option>
                                                <option>Chicago</option>
                                                <option>Queens</option>
                                                <option>Manhattan</option>
                                                <option>San Antonio</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>Choose State</option>
                                                <option>Alabama</option>
                                                <option>California</option>
                                                <option>Connecticut</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" name="postal-code" class="form-control" placeholder="Postal Code">
                                        </div>
                                    </div>
                                </div>

                                <h3 class="heading">Detailed Information</h3>
                                <div class="row mb-50">
                                    <div class="col-lg-12">
                                        <div class="form-group message">
                                            <label>Detailed Information</label>
                                            <textarea class="form-control" name="message" placeholder="Detailed Information"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Building Age (optional)</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>0-5 Years</option>
                                                <option>0-10 Years</option>
                                                <option>0-15 Years</option>
                                                <option>0-20 Years</option>
                                                <option>0-25 Years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Bedrooms (optional)</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Bathrooms (optional)</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="heading">Features (optional)</h3>
                                <div class="row mb-50">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="air-condition">
                                                <label class="form-check-label" for="air-condition">
                                                    Air Condition
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="free-parking">
                                                <label class="form-check-label" for="free-parking">
                                                    Free Parking
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="swimming-pool">
                                                <label class="form-check-label" for="swimming-pool">
                                                    Swimming Pool
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="laundry-room">
                                                <label class="form-check-label" for="laundry-room">
                                                    Laundry Room
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="window-covering">
                                                <label class="form-check-label" for="window-covering">
                                                    Window Covering
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="places">
                                                <label class="form-check-label" for="places">
                                                    Places to seat
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="alarm">
                                                <label class="form-check-label" for="alarm">
                                                    Alarm
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check checkbox-theme">
                                                <input class="form-check-input" type="checkbox" value="" id="central-heating">
                                                <label class="form-check-label" for="central-heating">
                                                    Central Heating
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="heading">Contact Details</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="name" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="index.html" class="btn btn-md btn-color">Preview</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- User page end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>

                    <ul class="contact-info">
                        <li>
                            Address: 20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            Email: <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a>
                        </li>
                        <li>
                            Fax: +XXXX XXXX XXX
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Service</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Listing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Grid</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Blog</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Property Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Properties</h4>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="http://placehold.it/75x75" alt="sub-property">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h5>
                            <p>February 27, 2018</p>
                            <p> <strong>$245,000</strong></p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="http://placehold.it/75x75" alt="sub-property-2">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h5>
                            <p>February 27, 2018</p>
                            <p> <strong>$245,000</strong></p>
                        </div>
                    </div>
                    <div class="media">
                        <a href="properties-details.html">
                            <img src="http://placehold.it/75x75" alt="sub-property-3">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h5>
                            <p>February 27, 2018</p>
                            <p> <strong>$245,000</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  2018 <a href="http://themevessel.com/" target="_blank">Theme Vessel</a>. Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about-1.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-1.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>



<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.selectBox.js"></script>
<script src="assets/js/rangeslider.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/leaflet-providers.js"></script>
<script src="assets/js/leaflet.markercluster.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/maps.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script >
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
</script>



</body>
</html>