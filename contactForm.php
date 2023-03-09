<?php

if (isset($_POST['submit'])){

	$_name = $_POST['names'];
	$_email = $_POST['emails'];
	$_message = $_POST['messages'];

	$mailTo = "msizahope@edhope.co.za";
	$headers = "From: ".$_email;
	$txt = "You have an message from: ".$_name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.html");
}


?>
