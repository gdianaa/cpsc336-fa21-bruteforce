<?php
include 'connect.php';
?>
<html>
  <body>
    <center>
   <form action="use_cases.php" method ="post">
   <font face=”Comic Sans” size= “12 px” color=”#000000”>Item Inventory</font><br><br>
  <!--form action="finalproject.php" method="post"-->
   	Item ID: <input type=”text” name=”itemid” placeholder= "10 digits only"><br><br>
	Item Name: <input type=”text” name=”itemname”><br><br>
	Item Quantity: <input type=”number” name=”itemquantity” min=”0”><br><br>

	<button class=”btnAdd” name = "insert" type=”submit” value = "Add"></button>
	<button class=”btnDelete” name = "delete" type=”submit”>Delete</button>
	<button class=”btnView” name ="search" type=”submit”>View</button>

	<style>
	.btnAdd {
		border: 2px solid #555555;
		Background-color: #4CAF50;
		Padding: 12px 24px;
		Color: black;
		Font-size: 16px;
		Text-align: center;
		Text-decoration: none;
		Cursor: pointer;
		Display: inline-block;
		Transition-duration: 0.4s;
	}
	.btnDelete {
		border: 2px solid #555555;
		Background-color: #f44336;
		Padding: 12px 24px;
		Color: black;
		Font-size: 16px;
		Text-align: center;
		Text-decoration: none;
		Cursor: pointer;
		Display: inline-block;
		Transition-duration: 0.4s;
	}
	.btnView {
		border: 2px solid #555555;
		Background-color: #008CBA;
		Padding: 12px 24px;
		Color: black;
		Font-size: 16px;
		Text-align: center;
		Text-decoration: none;
		Cursor: pointer;
		Display: inline-block;
		Transition-duration: 0.4s;
	}
	.btnAdd:hover {background: #eee;}
	.btnDelete:hover {background: #eee;}
	.btnView:hover {background: #eee;}
	</style>
      </form>
    </center>
  </body>
</html>
