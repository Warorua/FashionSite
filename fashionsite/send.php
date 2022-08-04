<?php
$FName=$_POST['Fname'];
$SName=$_POST['Sname'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$comment="Sent Email".$Message;
    echo $FName;


    mail($Email,$Message,$comment);
    echo "Mail Sent";










?>