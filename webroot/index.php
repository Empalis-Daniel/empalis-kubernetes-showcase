<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Our Guestbook</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/sign.css" />
<script>
function Validate()
{
	var x=document.forms["guest"]["email"].value;
	var y=document.forms["guest"]["name"].value;
	if(y==null || y=="")
	{
		alert("Please enter your Name! ");
		return false;
	}
	if(x==null || x=="")
	{
		alert("Please enter your email address!");
		return false;
	}
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  		alert("Not a valid e-mail address");
		return false;
	}
	else
		return true;
}
</script>
</head>

<body>
<div id="wrapper">
	<div id="logo">
		<hr id="top"/>
		<img src="img/empalis.png" id="imgLeft" style="width:400px; height:150px;" />
		<img src="img/ibm.png" id="imgCenter" style="width:400px; height:150px;" />
    	<p id="title"><span id="title"> >>>> Kubernetes / Spectrum Protect Plus Showcase <<<< </span></p>
	</div>
    <div id="content">
    	<h2>Sign our Guest Book:</h2>
   		<form name="guest" method="post" action="addcomment.php" onsubmit="return Validate();">
			<span>Name:</span>    <input type="text" name="name"/><br />
            <span>Email:</span> <input type="text" name="email"/><br />
            <p>Message:</p> <textarea name="message" rows="10" cols="50"> </textarea> <br />
            <input type="submit" value="Sign this in the Book" />
        </form>
    </div>
	<div id="entries">
		<br />
		<hr>
		<h2>Guestbook entries:</h2>
		<?php include ("guestbook.php"); ?> 
	</div>
</div>
<div id="footer">
	<hr id="bottom"/>
	<p>Emaplis - IBM</p>
</div>
</body>
</html>
