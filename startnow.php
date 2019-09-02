<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'autoload.php';

if (sendMailToMe() == true) {
    // echo 'Message send successfull';
} 
function sendMailToMe() {
    try {  
    //Server settings
    // $mail->SMTPDebug = 2; 
    $mail = new PHPMailer(true);                          // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.realtysolutions.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '_mainaccount@realtysolutions.in';                 // SMTP username
    $mail->Password = 'LL)v7pf23N-gN3';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('_mainaccount@realtysolutions.in');
    $mail->addAddress('amitsharma18543@gmail.com', 'Contact us - C.R. Associates');     // Add a recipient
    // $mail->addAddress('crassociates56@gmail.com', 'Contact us - C.R. Associates');     // Add a recipient
    // $mail->addAddress('aayush.jaiswal984@gmail.com');               // Name is optional
    // $mail->addReplyTo($_POST['p-name'], $_POST['p-number']);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject =' Inquiry generated - '. $_POST['p-name'];
    $mail->Body    = '<div style="text-align: left;">
<h1>C.R. Associates</h1>
<p><b>Name</b> :'.$_POST['p-name'].'</p>
<p><b>Mobile</b> :'.$_POST['p-number'].'</p>
<br/><br/>
<a href="http://realtysolutions.in"><img src="http://realtysolutions.in/images/Reality%20Solution%20Logo.png" alt="crassociates" style="width: 15%;"></a>
</div>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
// function sendMailToUser() {
// try {
//     $mail = new PHPMailer(true); 
//     //Server settings
//     // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'mail.crassociates.in';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = '_mainaccount@crassociates.in';                 // SMTP username
//     $mail->Password = 'u+l7E6Of1GO3b(';                           // SMTP password
//     $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 465;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('_mainaccount@crassociates.in');
//     $mail->addAddress($_POST['p-name'], $_POST['p-number']);     // Add a recipient
//     // $mail->addAddress('aayush.jaiswal984@gmail.com');               // Name is optional
//     // $mail->addReplyTo('crassociates56@gmail.com', 'Replay');
//     $mail->addReplyTo('amitsharma18543@gmail.com', 'Replay');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     //Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Thanks for contact with us';
//     $mail->Body    = '<h1>C.R. Associates</h1><p>This is a confirmation that we have recived your mail and we will contact to you ASAP.</p> <br/> <a href="http://crassociates.in"><img src="http://crassociates.in/images/crassociates_logo.png" alt="crassociates" style="width: 25%;"></a>';
//         // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//         $mail->send();
//         return true;
//     } catch (Exception $e) {
//         echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
//     }
// }
?>