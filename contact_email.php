<?php 

$ContactName= $ContactEmail = $ContactMessage = "";
if(isset($_POST['contactSubmit'])){

    $ContactName= $_POST['contactName'];
    $ContactEmail = $_POST['contactEmail'];
    $ContactMessage = $_POST['contactMsg'];



    $to = '<rakesh.webnotics@gmail.com>'; // this is your Email address
    $from = 'Backseat-Trader'; // this is the sender's Email address
    $subject = "Contact submission";
    $message = "<html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <center>
    <table width='50%' cellpadding='4' cellspacing='0' border='1' style='webkit-box-shadow: 0px 0px 4px black; margin: 10px auto; border-radius: 5px;'>
    <tr style='webkit-border-bottom: 1px solid #333'>
       <td colspan='2'><span style='font-size: 28px;
    font-weight: 800;color: #007bff;'>Backseat-Trader</span></td>
    </tr>
    <tr>
        <td><p>Name: </p></td>
        <td>$ContactName</td>
    </tr>
    <tr>
        <td><p>Email:</p></td>
        <td>$ContactEmail</td>
     </tr>
      <tr>
        <td><p>Message:</p></td>
        <td>$ContactMessage</td>
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
        header('Location: contact_thankyou.html');
    }
    
    }
?>
