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
	<h3>Name: <?php echo $row['name']; ?></h3>
	<p>Message:</p> <textarea name="message" rows="10" cols="50"><?php echo $row['message']; ?></textarea> <br />
	<hr>
	<?php } 
		mysqli_close($con);
?>
