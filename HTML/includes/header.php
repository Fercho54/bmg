<?php include("config.php"); ?>

<!-- main header start -->
<header class="main-header sticky-header header-shrink" id="main-header-2">
    <div class="main-header-container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="index.html">
                        <img src="assets/img/logos/logo.png" alt="logo">
                    </a>          
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>          
                    <div class="navbar-collapse ml-auto w-75" id="navbar"> 
                        <ul class="navbar-nav ml-auto">                   	                    
                            <li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['How it Works'] ?></a></li>                        
                            <a class="nav-link main-header-bmg" href="shop-list.html"><?php echo $lang['Sign Up'] ?></a>
                            <a class="nav-link main-header-bmg" href="shop-list.html"><?php echo $lang['Log In'] ?></a>                        
                            <li><a href="#" class="nav-btn-bmg btn btn-lg btn-round btn-theme"><?php echo $lang['I am Host'] ?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->