<?php
	$host="mysql"; //Add your SQL Server host here
	$user="cakephp"; //SQL Username
	$pass="pass4root"; //SQL Password
	$dbname="default"; //SQL Database Name
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($con,"SELECT name,message FROM guestbook");
	while($row = mysqli_fetch_array($result))
	{ ?>
	<h3><?php echo $row['name']; ?></h3>
    <p><?php echo $row['message']; ?></p>
	<?php } 
		mysqli_close($con);
?>