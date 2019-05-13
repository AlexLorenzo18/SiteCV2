<?php
 if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$name = $_POST['message'];

	$mailTo = "alexandre.lorenzo@ynov.com";
	$headers = "From : ".$mailFrom;
	$txt = "Tu as reçu un mail de ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>