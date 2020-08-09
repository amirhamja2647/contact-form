<?php  


if (isset($_POST['submit'])) 
{
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];

	if (empty($name) || empty($email) || empty($subject) || empty($msg))
	{
		header("location: index.php? error " );
	}
	else
	{
		$to = "amirhamjapubg@gmail.com";

		header("location:index.php?success");
		// if (mail($to,$name,$email,$subject,$msg)) 
		// {
		// 	header("location:index.php?success");
		// }

	}

}
else
{
	header("location: index.php");
}




?>