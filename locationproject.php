<?php
   $title = "Location page";
   $description = "This document contains the car dealerships location"; // (1) Set the title
   $author = "Scott Shannon";
   
   include "includes/headerproject.php"; 
   ?>
	<section>
		<br> <img src="https://chelan.highline.edu/~shannonscotta/csci102/project/images/imagemapproject.png" alt="map that includes tesla locations" usemap="#teslalocations">
		<map name="teslalocations">
			<area target="_blank" alt="Tesla OR" title="Tesla OR" href="https://www.tesla.com/findus/location/store/washingtonsquare" coords="393,557,12" shape="circle">
			<area target="_blank" alt="Tesla WA" title="Tesla WA" href="https://www.tesla.com/findus/location/service/seattlerenton" coords="498,22,11" shape="circle"> </map>
		<h4><a href="https://www.tesla.com/findus/location/service/seattlerenton">Seattle-Renton</a></h4>
		<ul>
			<li>700 S Grady Way Renton, WA 98057</li>
			<li>Monday - Friday 10:00am - 6:00pm</li>
			<li>seattle_ordersupport@tesla.com</li>
			<li>(425) 981-3223</li>
		</ul>
		<h4><a href="https://www.tesla.com/findus/location/store/washingtonsquare">Portland-Washington Square</a></h4>
		<ul>
			<li>9321 SW Washington Square Portland, OR 97223</li>
			<li>Monday - Saturday 10:00am - 9:00pm</li>
			<li>Tigard_ordersupport@tesla.com</li>
			<li>(503) 431-2350</li>
		</ul>
	</section>
	<?php
   include "includes/footerproject.php";                
   ?>