<!DOCTYPE html>
<html>

<head>
      <title>Insert Page page</title>
</head>

<body>
      <center>
	  <?php

        //connecting
	include 'connect.php';
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){
		die("Commection failed: " . $conn->connect_error);
	}

	//add method
          if(isset($_POST["insert"])) {
		$getid = $_REQUEST['itemid'];
		$getname = $_REQUEST['itemname'];
		$getquan = $_REQUEST['itemquantity'];

		$sql = "INSERT INTO employees (itemid,itemname,itemquantity)
		VALUES ('$getid','$getname','$getquan')";

		if(mysqli_query($conn, $sql)){
		  echo "<h3>data stored in a database successfully.</h3>";
		  echo nl2br("\n$itemid\n $itemname\n "
			. "$itemquantity");
		} else{
		  echo"ERROR: Sorry $sql. "
			. mysqli_error($conn);
		}
	}
	
	//delete method
	if (isset($_POST["delete"])){
		$getid = $_POST['itemid'];
		$getname = $_POST['itemname'];
		$getquan = $_POST['itemquantity'];
		
		$sql = "DELETE FROM employees WHERE itemid = '$getid'";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3> item id: ". $getid . " data deleted from database successfully</h3>";
		} else{
			echo "ERROR: Sorry $sql." 
		 	    . mysql_error($conn);
		}
	}
	if (isset($_POST["search"])){
		$sql =$conn->query( "SELECT * FROM employees");
		echo"#######################<br>";
		echo "<h3> Data In The Database </h3> <br>";
		echo"#######################<br><br>";
		while ($row = $sql->fetch_array()){
			echo "ITEM ID: {$row['itemid']} <br> ".
				"ITEM NAME: {$row['itemname']} <br>".
				"ITEM QUANTITY: {$row['itemquantity']}<br>".
				"-------------------------------------- <br>";
		}
	}

	//close connection
	mysqli_close($conn);
	?>		
    </center>
</body>

</html>
		
