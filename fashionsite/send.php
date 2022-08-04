<?php
$FName=$_POST['Fname'];
$SName=$_POST['Sname'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$comment="Sent Email".$Message;
    echo $FName;


    mail($Email,$Message,$comment);
    echo "Mail Sent";

//MY ADDED SMTP SECTION

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
				
				
					$message = "
					   This is the message that will be sent by the smtp. You can edit it however you want. 
                       You can add HTML here for styled message. However, the HTML should use Inline CSS ONLY
					";

					//Load phpmailer
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				
				        //Server settings
						
				        $mail->isSMTP();                                     
				        $mail->Host = gethostbyname('mail.tsavo.store'); //------This is the server host                  
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'noreply@tsavo.store'; //---------the email sending   
				        $mail->Password = '@C3yaEsrjusrusdrXFtUt'; //---------the password of the email sending                      
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'tls';                           
				        $mail->Port = 587;  //---------the port from which smtp will use                                    

				        $mail->setFrom('noreply@tsavo.store'); //---------useful but not necessary
				        
				        //Recipients
				        $mail->addAddress($email);  //---------the email receiving             
				        $mail->addReplyTo('waroruaalex@tsavo.store'); //---------the email receiving a copy
				       
				        //Content
				        $mail->isHTML(true); //--------- =TRUE if you have HTML in you message ELSE FALSE if you dont have                                  
				        $mail->Subject = 'TSAVO 254'; //---------the subject of the email     
				        $mail->Body    = $message; //---------the message body of the email  

				        $mail->send();

	

//END OF MY CODE








?>
