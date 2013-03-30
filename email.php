<?php


if ( isset ($_POST['submit'])) {  // Check for each form value when the form is submitted:

$problem = FALSE; // no problems!


if ( empty ($_POST['Name'])) {    // alert the user that they forgot to fill in "First Name"

$problem = TRUE;

print ("<p>You forgot to fill in your <b>\"First Name\"</b>.</p>");

}


if ( empty ($_POST['email']))  {    // alert the user that they forgot to fill in "Email Address"

$problem = TRUE;

print ("<p>You forgot to fill in your <b>\"Email Address\"</b>.</p>");

}


if ( empty ($_POST['message']))  {    // alert the user that they forgot to fill in "Message"

$problem = TRUE;

print ("<p>You forgot to fill in your <b>\"Message\"</b>.</p>");

}


if (!$problem) { // if there are no problems:

print ("<p>Thank You for contacting The Rathcormac Inn, <b>{$_POST['Name']}</b>!</p>\n"); // Thank the user.

$mailMesage =  ("{$_POST['firstName']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email.

mail ('donna@murrion.com', 'Query',$mailMesage); // Send the email.

}

}


print '
<form name="contactForm" method="post" action="contact.php">  
<h2>Name:</h2>
<p><input name="Name" type="text" id="Name" size="30" ></p>
<h2>Email:</h2>
<p><input name="email" type="text" id="email" size="30" ></p>
<h2>Message:</h2>
<p><textarea name="message" cols="40" rows="15" ></textarea></p>
<p><input type="submit" name="submit" value="send" /></p>
</form>
';
?>
