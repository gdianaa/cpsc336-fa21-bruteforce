<?php
include 'connect.php';
?>
<html>
  <body>
    <center>
   <form action="use_cases.php" method ="post">
  <!--form action="finalproject.php" method="post"-->
   	<input type="text" name="itemid" min = "10" placeholder="itemId"><br><br>
	<input type="text" name="itemname" placeholder="itemName"><br><br>
	<input type="number" name="itemquantity" min="0" placeholder="itemQuantity"><br><br>
	
	<input type="submit" name="insert" value="Add">
	<input type="submit" name="delete" value="Delete">
	<input type="submit" name="search" value="Find">

	</form>
     </center>
   </body>
</html>
		
