<?php
if(isset($_POST['submit']))
{
	$name = $_POST['Name'];
	$back_mail = $_POST['email'];
	$message = $_POST['message'];
	$end_message = "Name:".$name." 
			Email:".$back_mail." 
			Message:".$message." ";

			if(mail("paulyksbzone@gmail.com",$name,$end_message))
			{
				die("<font color=green>Mail-ul a fost trimis.");
			}
}
?>