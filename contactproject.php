<?php
   $title = "Contact page";
   $description = "This document contains contact information"; // (1) Set the title
   $author = "Scott Shannon";
   
   include "includes/headerproject.php"; 
   ?>
	<form action="POST">
		<h2 class="txt">Contact Us</h2>
		<label for="fullName">Full Name
			<br/>
		</label>
		<input type="text" id="fullName" style="width: 10.4em; font-size: 1em;" name="fullName" />
		<br/>
		<label for="emailAddress">Email Address
			<br/>
		</label>
		<input type="text" id="emailAddress" style="width: 10.4em; font-size: 1em;" name="emailAddress" />
		<br/>
		<label for="telephone">Telephone
			<br/>
		</label>
		<input type="text" id="telephone" style="width: 10.4em; font-size: 1em;" name="telephone" />
		<br/>
		<label for="address">Address
			<br/>
		</label>
		<input type="text" id="address" style="width: 10.4em; font-size: 1em;" name="address" />
		<br/>
		<label for="zipCode">Zip Code
			<br/>
		</label>
		<input type="text" id="zipCode" style="width: 10.4em; font-size: 1em;" name="zipCode" />
		<br/>
		<label for="additionalDetails">Additional Details
			<br/>
		</label>
		<textarea id="additionalDetails" style="width: 13em; font-size: 1em;" name="additionalDetails" rows="5"></textarea>
		<br/>
		<button type="submit" id="sendContactEmail" class="positive" name="sendContactEmail">SEND</button>
	</form>
	<?php
   include "includes/footerproject.php";                
   ?>