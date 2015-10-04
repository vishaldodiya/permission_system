<?php	
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "vdodiya03@gmail.com";
$mail->Password = "9328409552";
$mail->SetFrom("vdodiya03@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("13bce026@nirmauni.ac.in");
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Message has been sent";
    }
  
?>

<script type='text/javascript'>alert('Thank You! Your EMail Has Been Delivered!');</script>