<?php 
if(isset($_POST['refer_submit'])){
    $to = $_POST['friend_email']; // this is your Email address
    $from = $_POST['email_referer']; // this is the sender's Email address
    $friend_name = $_POST['friend_name'];
    $fname_referer = $_POST['fname_referer'];
    $subject = "Form submission";
    $message = "<html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <center>
    <table width='65%' cellpadding='4' cellspacing='0' border='1' style='webkit-box-shadow: 0px 0px 4px black; margin: 10px auto; border-radius: 5px;'>
    <tr style='webkit-border-bottom: 1px solid #333'>
       <td><span style='font-size: 28px;
    font-weight: 800;color: #007bff;'>Backseat-Trader</span></td>
    </tr>
    <tr>
    <td>
        <p>Hey <strong>$friend_name,</strong></p>
        <p>I saw this great eToro trading algorithm online that I though you might like. You can see it here; <a href='https://backseat-trader.com'>https://backseat-trader.com</a></p>
        <p>Regards,<br>
        <strong>$fname_referer</strong></p>
     </td>
     </tr>
    </table>
    <center>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:" .$from;
    $result = mail($to,$subject,$message,$headers);
    if($result){
        // echo '<script>alert("Hello")</script>';
        header('Location: home2.html');
    }
    
    }
?>
