<?php

// do not change the below $thebody value 

$thebody = "";

// change the below variable value as per your FORM POST variable

$theto = " globeag445@gmail.com"; 

$thesub = "Contact Form from Prizol";

$successmessage ="Thanks, Your details has reached us. We will get back to you very soon";

$errormessage ="Sorry could not send the mail, please try again";

// Assign the sender e-mail address FIELD here

$email= $_POST['email'];

// Note: Do not forget . before = sign when assigning $thebody value

// and all FORM veriable will come as $_POST['variable']

// and all lines end with semicoln i.e ;

$thebody .="Contact Form from Prizol:- " . "\n\n"; 

$thebody .="Your Name : " . $_POST['name']. "\n"; 
$thebody .="Your Name : " . $_POST['last name']. "\n"; 


// $thebody .="Job Title : " . $_POST['job-title'] . "\n";

// $thebody .="Company : " . $_POST['company'] . "\n";

$thebody .="Phone : " . $_POST['number'] . "\n";

$thebody .="Email  : " . $_POST['email'] . "\n";

$thebody .="Comments : " . $_POST['message'] . "\n";





//

// DO NOT CHANGE THE BELOW LINES

//

$senderemail="From:$email\nReply-to:$email\n";

if (!mail($theto, $thesub, $thebody, $senderemail)){

printf ("<b>$errormessage</b>");

} else {

printf ("<b>$successmessage</b>");

}

?>

