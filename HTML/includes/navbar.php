<ul class="navbar-nav ml-auto">
	<?php 
		foreach ($navItems as $Item){			
			echo '<a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-theme">Get Started Now</a>';
			echo "<li><a class=\"$active\" href=\"$Item[slug]\">$Item[title]</a></li>";
		}
	 ?>
</ul>   