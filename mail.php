<?php
     $connection = mysql_connect("local","root","") or die ("couldn't connect to the server");
     mysql_select_db =(data,$connection) or die ("couldn't connect to the database");



     
    //  install xammp run databse offline and connect to php script
    


    $to = 'root@localhost';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    


    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$subject.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }
    if(isset())

?>
