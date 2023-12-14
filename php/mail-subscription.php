<?php

$recipient = "it_ho@badshatex.com";

# SUBJECT (Subscribe/Remove)
#$subject = "Subscribe";

# RESULT PAGE
$location = "enter the URL of the result page here";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $_REQUEST['email'];

# MAIL BODY
#$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient,$body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##
echo "Thank you for contacting us!";
header( "Location: $location" );
?>