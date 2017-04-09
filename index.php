<?php

require 'header.php';

?>

		<center>
			<h1>Welcome to Click2Call TCXC Tutorial</h1>
			<p>User will enter their numbere to connect to sales team call center rep</p><br>

			<!--Customer comes here and asked to enter their phone number	-->	

			<form action="Makecall.php" method="POST">

			Enter your phone number: 
			<input type="text" name="customer_phone" placeholder="19542405441" value="19542405411">

			<button type="submit">Call me now</button>
				
			</form>


		</center>









<?php

include 'footer.php';

?>




