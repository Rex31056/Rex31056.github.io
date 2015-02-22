<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    } 
else                /* send the submitted data */
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        mail("williamloo888@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>