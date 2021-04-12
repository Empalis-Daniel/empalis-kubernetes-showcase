<?php
	$host="mysql"; //Add your SQL Server host here
	$user="cakephp"; //SQL Username
	$pass="FVtVOTtv1hsbT3EE"; //SQL Password
	$dbname="default"; //SQL Database Name
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($con,"SELECT name,message FROM guestbook");
	while($row = mysqli_fetch_array($result))
	{ ?>
	<div style="width: 500px; background-color: #FF3300; color: white; border: 10px solid #000;"> 
		<h3>Name: <?php echo $row['name']; ?></h3>
		<p>Message:</p> <?php echo $row['message']; ?> <br />
	</div>
	<?php } 
		mysqli_close($con);
?>
