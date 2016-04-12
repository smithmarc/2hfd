<?php

$EmailFrom = "admin@marcsmith.website";
$EmailTo = "smivers624@gmail.com";
$Subject = "2Hfd contact form enquiry!";
$Name = Trim(stripslashes($_POST['name']));
$Age = Trim(stripslashes($_POST['age']));
$Club = Trim(stripslashes($_POST['club']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['comment']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Age: ";
$Body .= $Age;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.html\">";
}
else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
