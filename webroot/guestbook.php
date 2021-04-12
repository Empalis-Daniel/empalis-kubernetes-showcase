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
	while($row = array_reverse(mysqli_fetch_array($result)))
	{ ?>
	<div style="width: 800px; background-color: #f5f5f5; padding: 10px; border: 1px; border-style: solid;"> 
		<h4>Name: <?php echo $row['name']; ?></h3>
		<p>Message:</p> <?php echo $row['message']; ?><br />
		<br />
	</div>
	<?php } 
		mysqli_close($con);
?>