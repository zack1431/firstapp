<?php 
    header("Content-type: text/css");
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $to = "sahil12@makingmemory.co.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = 'Contact Form';
    $phone = $_POST['phone'];
    $msg =$_POST['message'];
    $subject2 = "Copy of your form submission";
    $message =  "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Enquiry Form</title>
</head>
<body>
<p></p>
<table border='1' cellpadding='10'>
<tr>
<th>Name</th><th>Email</th><th>Phone Number</th><th>Message</th>
</tr>
<tr>
<td>$first_name</td><td>$from</td><td>$phone</td><td>$msg</td>
</tr>
</table>
</body>
</html>
";
    $message2 = "Thank You For Your Interest " . $first_name . "\n\n" . "We Will Get Back To you Shortly";
    
    $headers .= "From:" . $from;
    $headers2 = "From:" . $to;
    ini_set("SMTP","localhost");
    ini_set("smtp_port","25");
    $res=mail($to,$subject,$message,$headers);
    
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        // if($retvieve == true)
        // {
            echo "<center><strong>Mail Sent, " . $first_name . ",</strong>we will contact you shortly.</center>";
        // }
        // else
        // {
            // echo "Message Could Not Be Sent...";
        // }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

?>