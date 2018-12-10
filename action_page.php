<html>
<head>
<title>Confirmation Page of Web Form</title>
</head>
<h1>Confirmation Page of Contact Request</h1>

<p>Thank you for submitting this form. 

<p>I have successfully received it. 

<p>Below is a summary of the information you provided.<br><br>  
<?php
echo 'firstname: ' . $_POST ["FirstName"] . '<br>';
echo 'lastname: ' . $_POST ["LastName"] . '<br>';
echo 'country: ' . $_POST ["Country"] . '<br>';
echo 'subject: ' . $_POST ["Subject"];
?>
