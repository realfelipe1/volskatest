<?php
include <index class="html"></index>
if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
	} else {
		mail("krishsuisun@gmail.com, krish2suisun@gmail.com", "Contact message", "Name: ".$_POST['name']."
		Email: ".$_POST['name']."
		Message: ".$_POST['message']);
		
		{
      $_POST = array();
		$result='<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly</div>';
		}
	}


}
?>