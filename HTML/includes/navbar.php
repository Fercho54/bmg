<ul class="navbar-nav ml-auto">
    <?php
        $lenguage = "español"; 
		foreach ($navItems as $Item){			
            if ($lenguage=="español") {
                echo'';                
            }
            echo '<a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-theme">Get Started Now</a>';            
        };
        echo '<div class="form-group">
                                <select class="selectpicker search-fields" name="area">
                                    <option>Area From</option>
                                    <option>1500</option>
                                    <option>1200</option>
                                    <option>900</option>
                                    <option>600</option>
                                    <option>300</option>
                                    <option>100</option>
                                </select>
                            </div>';
	 ?>
</ul>   