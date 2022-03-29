
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
  require 'vendor/autoload.php';
    
  $mail = new PHPMailer(true);
    
  try {
      $mail->SMTPDebug = 0;                                       
      $mail->isSMTP();                                            
      $mail->Host       = 'smtp.gmail.com';                    
      $mail->SMTPAuth   = true;                             
      $mail->Username   = 'pijcan22@gmail.com';                 
      $mail->Password   = '22Juni2001';                        
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              
      $mail->Port       = 587;  
    
      $mail->setFrom('pijcan22@gmail.com', 'AdoptMe Admin');           
      $mail->addAddress('pijarcandra22@gmail.com');
         
      $mail->isHTML(true);                                  
      $mail->Subject = 'Subject';
      $mail->Body    = 'HTML message body in <b>bold</b> ';
      $mail->AltBody = 'Body in plain text for non-HTML mail clients';
      $mail->send();
      echo "Mail has been sent successfully!";
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
    
  ?>