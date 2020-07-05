<?php
//Variable setting
$Name=$_REQUEST['Name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

//check input fields
if(empty($Name) || empty($email) || empty($message))
{
    echo "All fields are compulsory to fill";
}
else
{
    mail("srishtidas1702@gmail.com","GauravsPreB",$message,"From: $Name <$email>");
    echo '<script type='text/javascript'>alert("")</script>';
    echo '<script type='text/javascript'>alert("Your message is sent successfully");
    window.history.log(-1);
    </script>';
}
?>