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
                                <div class="row mb-50">
                                    <div class="col-sm-3">	
                                        <input type="radio" name="radio" id="radio3" value="house" class="radio"/>
                                            <label class="bmg-radio-type" for="radio3"><div><i class="fa fa-home fa-2x"></i><br><span> House/Apartment</span></div></label>
                                    </div>
                                    
                                    <div class="col-sm-3">	
                                        <input type="radio" name="radio" id="radio4" value="room" class="radio"/>
                                        <label class="bmg-radio-type" for="radio4"><div><i class="fa fa-bed fa-2x"></i><br><span> Room(s)</span></div></label>
                                    </div>
                                </div>                                
                            </form>

                            


                            <div id="fullhouse">
                                <form id="form2" method="GET">
                                    <h3 class="heading">What kind of property you have? House STEP 2</h3>
                                    <div class="row mb-20"> 
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Listing Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Address">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-50">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="selectpicker search-fields" name="house-type">
                                                    <option>Apartment</option>
                                                    <option>House</option>                                                
                                                    <option>Annexed Housing</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Available From</label>
                                                <div class='input-group date' id='datepicker'>                                        
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>		                                
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Number of tenats</label>
                                                <input type="text" name="address" class="form-control" placeholder="Maximum capacity">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Size of your Property</label>
                                                <input type="text" name="address" class="form-control" placeholder="square meters">
                                            </div>
                                        </div>
                                    

                                    </div>



                                    
                            
                                </form>

                                <form id="form3" method="GET">

                                    
                                    <h1>FULL HOUSE DEVELOP</h1>

                                    <h3 class="heading">How much you want to earn?</h3>                                                                
                                    <div class="row">
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
                                    </div>
                                    <div class="row mb-50">
                                        <div class="col-sm-12">
                                        <input type="button" id="addcontracthouse" value="Add Text Field">
                                        <p id="fooBar">Fields:</p>
                                        </div>
                                    </div>
                                    <div id="contracthouse" class="row mb-50">
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
                                    
                                    
                                    
                                        </div>
                                </form>

                                <form id="form4" method="GET">  
                                    <h3 class="heading">Tell us about your Home!</h3>
                                    <div class="row mb-20"> 
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Beautiful Title</label>
                                                <input type="text" name="address" class="form-control" placeholder="Give a name to your Home!">
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row mb-50"> 
                                        <div class="col-sm-12">
                                            <div class="form-group message">
                                                <label>Beautiful Description</label>
                                                <textarea class="form-control" name="message" placeholder="Detailed Information"></textarea>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row mb-50">                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>How many Rooms your property have</label>
                                                <input type="text" name="price" class="form-control" placeholder="Only Numbers > 0">
                                            </div>
                                        </div> 
                                    </div>
                                    <h4>Room 1</h4>
                                    <div class="row mb-50">
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="sqr meters">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Upoload Pictures of this specific Room</label>
                                            <div id="myDropZone1" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey">
                                                    <label class="form-check-label" for="personalkey">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk">
                                                    <label class="form-check-label" for="desk">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet">
                                                    <label class="form-check-label" for="closet">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv">
                                                    <label class="form-check-label" for="tv">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony">
                                                    <label class="form-check-label" for="balcony">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan">
                                                    <label class="form-check-label" for="fan">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac">
                                                    <label class="form-check-label" for="ac">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Room 2</h4>
                                    <div class="row mb-50">
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="sqr meters">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Upoload Pictures of this specific Room</label>
                                            <div id="myDropZone3" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey2">
                                                    <label class="form-check-label" for="personalkey2">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk2">
                                                    <label class="form-check-label" for="desk2">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet2">
                                                    <label class="form-check-label" for="closet2">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv2">
                                                    <label class="form-check-label" for="tv2">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony2">
                                                    <label class="form-check-label" for="balcony2">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan2">
                                                    <label class="form-check-label" for="fan2">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac2">
                                                    <label class="form-check-label" for="ac2">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                    <h4>Room 3 </h4>
                                    <div class="row mb-50">
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="sqr meters">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Upoload Pictures of this specific Room</label>
                                            <div id="myDropZone3" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey3">
                                                    <label class="form-check-label" for="personalkey3">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk3">
                                                    <label class="form-check-label" for="desk3">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet3">
                                                    <label class="form-check-label" for="closet3">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv3">
                                                    <label class="form-check-label" for="tv3">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony3">
                                                    <label class="form-check-label" for="balcony3">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan3">
                                                    <label class="form-check-label" for="fan3">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac3">
                                                    <label class="form-check-label" for="ac3">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                    </div>
                                
                                    <h3>Shared Bathrooms</h3>
                                    <div class="row mb-50">
                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>How Many Shared Bathrooms</label>
                                                <input type="text" name="price" class="form-control" placeholder="">
                                            </div>
                                        </div> 
                                    </div>                               
                                    
                                    <div class="row mb-50">                                
                                        
                                        <div class="col-sm-2">
                                        <h5>Shared Bathroom 1</h5>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Type of Bathroom</label>
                                                    <select class="selectpicker search-fields" name="Status">
                                                        <option>Complete</option>
                                                        <option>Half</option>                                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                                                
                                                                
                                        <div class="col-sm-2">
                                        <h5>Shared Bathroom 2</h5>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Type of Bathroom</label>
                                                    <select class="selectpicker search-fields" name="Status">
                                                        <option>Complete</option>
                                                        <option>Half</option>                                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-2">
                                        <h5>Shared Bathroom 3</h5>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Type of Bathroom</label>
                                                    <select class="selectpicker search-fields" name="Status">
                                                        <option>Complete</option>
                                                        <option>Half</option>                                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>  
                                </form>

                                <form id="form5" method="GET">
                                    <h3 class="heading">Common Areas Gallery</h3>
                                    <div class="row mb-60">
                                        <div class="col-lg-12">
                                            <div id="myDropZone" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </form>

                                <form id="form6" method="GET">
                                    <h3 class="heading">Describe your perfect tenants</h3>
                                    <div class="row mb-60">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Preferred Gender</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Unimportant</option>   
                                                    <option>Females Only</option>
                                                    <option>Males Only</option>                                                                                             
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Minimum Age</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Unimportant</option>   
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                    <option>35</option>
                                                    <option>36</option>
                                                    <option>37</option>
                                                    <option>38</option>
                                                    <option>39</option>
                                                    <option>40+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Maximum Age</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Unimportant</option>   
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                    <option>35</option>
                                                    <option>36</option>
                                                    <option>37</option>
                                                    <option>38</option>
                                                    <option>39</option>
                                                    <option>40+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Couples Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>   
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>  
                                </div>
                                

                                <form id="form7" method="POST">
                                    <h3 class="heading">House Features</h3>
                                    <div class="row mb-50">                                    
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="garden">
                                                    <label class="form-check-label" for="garden">
                                                        Garden
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="kitchen">
                                                    <label class="form-check-label" for="kitchen">
                                                        Full Equiped Kitchen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="basement">
                                                    <label class="form-check-label" for="basement">
                                                        Basement
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="parking">
                                                    <label class="form-check-label" for="parking">
                                                        Parking
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="terrace">
                                                    <label class="form-check-label" for="terrace">
                                                        Terrace
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="security">
                                                    <label class="form-check-label" for="security">
                                                        Security cameras
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="washing">
                                                    <label class="form-check-label" for="washing">
                                                        Washing Machine
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="dryer">
                                                    <label class="form-check-label" for="dryer">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="wifi">
                                                    <label class="form-check-label" for="wifi">
                                                        Wifi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="pool">
                                                    <label class="form-check-label" for="pool">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="heating">
                                                    <label class="form-check-label" for="heating">
                                                        Heating
                                                    </label>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                    </div>

                                </form>
                                <form id="form7" method="POST">

                                    <h3 class="heading">Services Included</h3>
                                    <div class="row mb-50">                                   
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Gas</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Electricity</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Water</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Internet</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="heading">Rules</h3>
                                    <div class="row mb-50">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Animals Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Smoking Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                    <option>Only Outside</option>       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Musical Instruments</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                </select>
                                            </div>
                                        </div>    
                                    </div>                                
                                </form>
                            </div>
                            <div id="fullhouse">
                                <form id="form2" method="GET">
                                    <h3 class="heading">What kind of property you have? House STEP 2</h3>
                                    <div class="row mb-20"> 
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Listing Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Address">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-50">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="selectpicker search-fields" name="house-type">
                                                    <option>Apartment</option>
                                                    <option>House</option>                                                
                                                    <option>Annexed Housing</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Available From</label>
                                                <div class='input-group date' id='datepicker'>                                        
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>		                                
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Number of tenats</label>
                                                <input type="text" name="address" class="form-control" placeholder="Maximum capacity">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Size of your Property</label>
                                                <input type="text" name="address" class="form-control" placeholder="square meters">
                                            </div>
                                        </div>
                                    

                                    </div>



                                    
                            
                                </form>

                                <form id="form6" method="GET">

                                    <div class="row mb-50">
                                    <h1>ROOMS DEVELOPMENT</h1>
                                    
                                    <h3 class="heading">Tell us about your Home!</h3>
                                    </diV>
                                    <div class="row mb-20"> 
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Beautiful Title</label>
                                                <input type="text" name="address" class="form-control" placeholder="Give a name to your Home!">
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row mb-50"> 
                                        <div class="col-sm-12">
                                            <div class="form-group message">
                                                <label>Beautiful Description</label>
                                                <textarea class="form-control" name="message" placeholder="Detailed Information"></textarea>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="row mb-50">    
                                        <div class="col-lg-12">
                                            <label>Upoload Pictures of common areas</label>
                                            <div id="myDropZone1" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="form7" method="POST">
                                    <h3 class="heading">House Features</h3>
                                    <div class="row mb-50">                                    
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="garden">
                                                    <label class="form-check-label" for="garden">
                                                        Garden
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="kitchen">
                                                    <label class="form-check-label" for="kitchen">
                                                        Full Equiped Kitchen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="basement">
                                                    <label class="form-check-label" for="basement">
                                                        Basement
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="parking">
                                                    <label class="form-check-label" for="parking">
                                                        Parking
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="terrace">
                                                    <label class="form-check-label" for="terrace">
                                                        Terrace
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="security">
                                                    <label class="form-check-label" for="security">
                                                        Security cameras
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="washing">
                                                    <label class="form-check-label" for="washing">
                                                        Washing Machine
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="dryer">
                                                    <label class="form-check-label" for="dryer">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="wifi">
                                                    <label class="form-check-label" for="wifi">
                                                        Wifi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="pool">
                                                    <label class="form-check-label" for="pool">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="heating">
                                                    <label class="form-check-label" for="heating">
                                                        Heating
                                                    </label>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                    </div>

                                </form>
                                <form id="form7" method="POST">

                                    <h3 class="heading">Services Included</h3>
                                    <div class="row mb-50">                                   
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Gas</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Electricity</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Water</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Internet</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="heading">Rules</h3>
                                    <div class="row mb-50">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Animals Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Smoking Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                    <option>Only Outside</option>       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Musical Instruments</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                </select>
                                            </div>
                                        </div>    
                                    </div>                                
                                </form>
                                <form id="form6" method="GET">
                                    <h3 class="heading">Describe your perfect tenants</h3>
                                    <div class="row mb-60">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Preferred Gender</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Unimportant</option>   
                                                    <option>Females Only</option>
                                                    <option>Males Only</option>                                                                                             
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Minimum Age</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Unimportant</option>   
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                    <option>35</option>
                                                    <option>36</option>
                                                    <option>37</option>
                                                    <option>38</option>
                                                    <option>39</option>
                                                    <option>40+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Maximum Age</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Unimportant</option>   
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                    <option>35</option>
                                                    <option>36</option>
                                                    <option>37</option>
                                                    <option>38</option>
                                                    <option>39</option>
                                                    <option>40+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Couples Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>   
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                                    <div class="row mb-50">                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Add your rooms</label>
                                                <input type="text" name="price" class="form-control" placeholder="Only Numbers > 0">
                                            </div>
                                        </div> 
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
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Deposit Required</label>
                                                <select class="selectpicker search-fields" name="contract1">
                                                    <option>1 Month of Rent</option>
                                                    <option>2 Months of Rent</option>                                                                                                       
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <h4>Room 1</h4>

                                    <div class="row mb-50">

                                        <div class="col-sm-3">  
                                            <div class="form-group">
                                                <label>Available From</label>
                                                <div class='input-group date' id='datepicker2'>                                        
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>		                                
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                            
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="m2">
                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-2">                                            
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                            <p>aditional bed +</p>
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Features</h6>                                             
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv">
                                                    <label class="form-check-label" for="tv">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony">
                                                    <label class="form-check-label" for="balcony">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan">
                                                    <label class="form-check-label" for="fan">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac">
                                                    <label class="form-check-label" for="ac">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey">
                                                    <label class="form-check-label" for="personalkey">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk">
                                                    <label class="form-check-label" for="desk">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet">
                                                    <label class="form-check-label" for="closet">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <h5>Add contract +</h5>
                                        </div>
                                        
                                    </div>
                                    
                                       
                                   
                                    <h4>Private Contracts</h4>
                                    <div class="row mb-50">                                        
                                        <div class="col-sm-3">
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
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="price" class="form-control" placeholder="MXN (Mexican Pesos)">
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Shared Contracts</h4>
                                    <div class="row">
                                    <div class="col-sm-2">
                                            <div class="form-group">
                                                <label>Max Number of Tenants</label>
                                                <select class="selectpicker search-fields" name="contract1">
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="shared1">
                                                    <label class="form-check-label" for="shared1">
                                                        Allow Individual rents for your shared room contracts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">                                        
                                        <div class="col-sm-3">
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
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="price" class="form-control" placeholder="MXN (Mexican Pesos)">
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <div class="row mb-50">                                        
                                        <div class="col-sm-3">
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
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="price" class="form-control" placeholder="MXN (Mexican Pesos)">
                                            </div>
                                        </div>                                        
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
                                    </div>
                                    <div class="row mb-50">
                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <label>Available From</label>
                                                <div class='input-group date' id='datepicker2'>                                        
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>		                                
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <label>?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>  
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-50">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="sqr meters">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                        
                                    <div class="row mb-50">
                                        <div class="col-lg-12">
                                            <label>Upoload Pictures of this specific Room</label>
                                            <div id="myDropZone1" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                        

                                        

                                        
                                        
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey">
                                                    <label class="form-check-label" for="personalkey">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk">
                                                    <label class="form-check-label" for="desk">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet">
                                                    <label class="form-check-label" for="closet">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv">
                                                    <label class="form-check-label" for="tv">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony">
                                                    <label class="form-check-label" for="balcony">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan">
                                                    <label class="form-check-label" for="fan">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac">
                                                    <label class="form-check-label" for="ac">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Room 2</h4>
                                    <div class="row mb-50">
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="sqr meters">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Upoload Pictures of this specific Room</label>
                                            <div id="myDropZone3" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey2">
                                                    <label class="form-check-label" for="personalkey2">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk2">
                                                    <label class="form-check-label" for="desk2">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet2">
                                                    <label class="form-check-label" for="closet2">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv2">
                                                    <label class="form-check-label" for="tv2">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony2">
                                                    <label class="form-check-label" for="balcony2">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan2">
                                                    <label class="form-check-label" for="fan2">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac2">
                                                    <label class="form-check-label" for="ac2">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                    <h4>Room 3 </h4>
                                    <div class="row mb-50">
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="price" class="form-control" placeholder="sqr meters">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Private Bathroom?</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Yes</option>
                                                    <option>No</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Upoload Pictures of this specific Room</label>
                                            <div id="myDropZone3" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Bed Size</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>Single</option>
                                                    <option>Double</option>                                                
                                                    <option>Queen</option>                                                
                                                    <option>King</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="personalkey3">
                                                    <label class="form-check-label" for="personalkey3">
                                                        Personal Key
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="desk3">
                                                    <label class="form-check-label" for="desk3">
                                                        Desk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="closet3">
                                                    <label class="form-check-label" for="closet3">
                                                        Closet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="tv3">
                                                    <label class="form-check-label" for="tv3">
                                                        T.V
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="balcony3">
                                                    <label class="form-check-label" for="balcony3">
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="fan3">
                                                    <label class="form-check-label" for="fan3">
                                                        Fan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="ac3">
                                                    <label class="form-check-label" for="ac3">
                                                        A.C
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                    </div>
                                
                                    <h3>Shared Bathrooms</h3>
                                    <div class="row mb-50">
                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>How Many Shared Bathrooms</label>
                                                <input type="text" name="price" class="form-control" placeholder="">
                                            </div>
                                        </div> 
                                    </div>                               
                                    
                                    <div class="row mb-50">                                
                                        
                                        <div class="col-sm-2">
                                        <h5>Shared Bathroom 1</h5>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Type of Bathroom</label>
                                                    <select class="selectpicker search-fields" name="Status">
                                                        <option>Complete</option>
                                                        <option>Half</option>                                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                                                
                                                                
                                        <div class="col-sm-2">
                                        <h5>Shared Bathroom 2</h5>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Type of Bathroom</label>
                                                    <select class="selectpicker search-fields" name="Status">
                                                        <option>Complete</option>
                                                        <option>Half</option>                                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-sm-2">
                                        <h5>Shared Bathroom 3</h5>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Type of Bathroom</label>
                                                    <select class="selectpicker search-fields" name="Status">
                                                        <option>Complete</option>
                                                        <option>Half</option>                                                
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>  
                                </form>

                                <form id="form5" method="GET">
                                    <h3 class="heading">Common Areas Gallery</h3>
                                    <div class="row mb-60">
                                        <div class="col-lg-12">
                                            <div id="myDropZone" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </form>

                                 
                                </div>
                                

                                <form id="form7" method="POST">
                                    <h3 class="heading">House Features</h3>
                                    <div class="row mb-50">                                    
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="garden">
                                                    <label class="form-check-label" for="garden">
                                                        Garden
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="kitchen">
                                                    <label class="form-check-label" for="kitchen">
                                                        Full Equiped Kitchen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="basement">
                                                    <label class="form-check-label" for="basement">
                                                        Basement
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="parking">
                                                    <label class="form-check-label" for="parking">
                                                        Parking
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="terrace">
                                                    <label class="form-check-label" for="terrace">
                                                        Terrace
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="security">
                                                    <label class="form-check-label" for="security">
                                                        Security cameras
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="washing">
                                                    <label class="form-check-label" for="washing">
                                                        Washing Machine
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="dryer">
                                                    <label class="form-check-label" for="dryer">
                                                        Dryer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="wifi">
                                                    <label class="form-check-label" for="wifi">
                                                        Wifi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="pool">
                                                    <label class="form-check-label" for="pool">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value="" id="heating">
                                                    <label class="form-check-label" for="heating">
                                                        Heating
                                                    </label>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                    </div>

                                </form>
                                <form id="form7" method="POST">

                                    <h3 class="heading">Services Included</h3>
                                    <div class="row mb-50">                                   
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Gas</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Electricity</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Water</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Internet</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>included</option>
                                                    <option>not included</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="heading">Rules</h3>
                                    <div class="row mb-50">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Animals Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Smoking Allowed</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                    <option>Only Outside</option>       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Musical Instruments</label>
                                                <select class="selectpicker search-fields" name="Status">
                                                    <option>No</option>
                                                    <option>Yes</option>                                                
                                                    <option>Discussable</option>                                                
                                                </select>
                                            </div>
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
<script src="assets/js/panel.js"></Script>

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
            $('#datepicker2').datepicker({
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
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>