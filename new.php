<?php
    //checking for empty fields;
    $connection = mysqli_connect("localhost","root","") or die ("couldn't connect to the server");
    mysqli_select_db($connection,"test") or die ("couldn't connect to the database");
   // error_reporting(0);
    if(empty($_POST['name'])  		||
       empty($_POST['email']) 		|
       empty($_POST['message'])	||
       !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
       {
        
        return false;
       }
        
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
        
    // Create the email and send the message
    $to = 'maccyril23@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email";	
    mail($to,$email_subject,$email_body,$headers);
    echo ("<script language='javascript'>
         window.alert('message sent successfully');
         window.location.href='index1.php'</script>");
    return true;

?>