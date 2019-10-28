<?php
$conn = mysqli_connect("localhost","root","","websitedata");
if(! $conn )  
{  
 echo "not connected";
}  
else {
	echo 'Connected successfully';  
	}
?>
<!DOCTYPE html>
<script type="text/javascript">
	
</script>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$sql="INSERT INTO `web-contact`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')";
		if(mysqli_query($conn, $sql)){  
 		echo "Record inserted successfully";  
		}else{  
		echo "Could not insert record: ". mysqli_error($conn);  
		
		console.log("INSERT INTO `web-contact`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')");
}  

	}

  ?>
</body>
</html>