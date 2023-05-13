<?php
    //assign varibles//
    $username = $_GET['user-name'];
    $usermail = $_GET['email'];
    $usersubject = $_GET['about'];
    $usermessage = $_GET['message'];
    $mymail = "akshubodhare791@gmail.com";

    if (empty($username) || empty($usermail) || empty($usersubject) || empty($usermessage))
    {
        echo "fill the all fields for contact.."
    }
    else
    {
        mail($mymail, "form your resume website", $usermessage, "From:" $username <$usersubject> <$usermail>);
        echo "<script type='text/javascript'>
                
                alert('your message successfully send to Akshay Bodhare. Thanks For visiting');
                
                </script>";
    }
?>

/* <?php
        $sendername ="Sender name is : ".$_GET['user-name']."\n";

        $sendermail = "Sender Mail is : ".$_GET['email']."\n";

        $sendersubject = "About :".$_GET['about']"\n";

        $sendermessage = "Message is :".$_GET['message']."\n";

        $usermail = "akshubodhare791@gmail.com";

        $messagefrom = "form your resume website the ";
    
    if (empty($sendername) && empty($sendermail) && empty($sendersubject) && empty($sendermessage))
    {
        
        echo "<script type='text/javascript'>
                
                alert('fill the all fields for contact..');
                window.history.go(-1);
                
              </script>";
    }
    else
    {
        mail($usermail, $messagefrom, $sendername, $sendermail, $sendersubject, $sendermessage);
        echo "<script type='text/javascript'>
        
                
                
                alert('your message successfully send to Akshay Bodhare. Thanks For visiting');
                window.history.go(-1);
                </script>";
    }
?>*/


<?php 
    $Mymail = 'akshubodhare791@gmail.com'; 
    $EmailSubject = 'form your resume website the message is :'; 
    $mailheader = "Send From: ".$_GET["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $SenderName = "Sender Name is : ".$_GET["user-name"].""; 
    $SenderMail .= "Sender Email is : ".$_POST["email"].""; 
    $SenderMessage .= "Sender Comment is : ".nl2br($_POST["message"]).""; 

    mail($Mymail, $EmailSubject, $SenderName, $SenderMail, $SenderMessage, $mailheader) or die ("Failure"); 
?>


<?php 
$ToEmail = 'akshubodhare791@gmail.com'; 
$EmailSubject = 'form your resume website the message is :'; 
$mailheader = "Mail From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Sender Name: ".$_POST["user-name"].""; 
$MESSAGE_BODY .= "Sender Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Sender Comment: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>

if (empty($sendername) && empty($sendermail) && empty($sendersubject) && empty($sendermessage))
    {
        
        echo "<script type='text/javascript'>
                
                alert('fill the all fields for contact..');
                window.history.go(-1);
                
              </script>";
    }
    else
    {
        mail($usermail, $messagefrom, $sendername, $sendermail, $sendersubject, $sendermessage);
        echo "<script type='text/javascript'>
        alert('your message successfully send to Akshay Bodhare. Thanks For visiting');
                window.history.go(-1);
                </script>";
    }

 