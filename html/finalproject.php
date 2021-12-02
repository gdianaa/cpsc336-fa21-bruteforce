<?php
include 'connect.php';
?>
<html>
  <body>
    <center>
   <form action="use_cases.php" method ="post">
  <!--form action="finalproject.php" method="post"-->
	<font face=”Comic Sans” size= “12 px” color=”#000000”>Item Inventory</font><br><br>
   	<label> Item Id: <input type="text" name="itemid" min = "10" placeholder="10 digits needed"><br><br></label>
	<label> Item Name: <input type="text" name="itemname"><br><br></label>
	<label> Item Quantity: <input type="number" name="itemquantity" min="0" ><br><br></label>
	
	<input type="submit" name="insert" value="Add">
	<input type="submit" name="delete" value="Delete">
	<input type="submit" name="search" value="Find">

	</form>
     </center>
   </body>
</html>

