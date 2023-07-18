<?php 

if(isset($_POST['submit'])){
        $to = "info@holozonencr.com"; 
        // $from = $_POST['info@holozonencr.com'];
        $from = $email;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $category = $_POST['category'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $subject = "Book an Appointment For Holozone ";
        $subject2 = "Copy of your form submission";
        $message = "Book Appointment for Holozone Game". "\n\n"."Name:-" . $name . " " ."\n\n"."Phone Number:-" .$phone. "\n\n". " "."Customer Email:-" . $email ."\n\n". " "."Choose Game:-" .$category."\n\n". " "."Appointment Date:-" .$date."\n\n". " "."Appoitment Time:-" .$time."\n\n" . "\n\n" ."Customer Message:-" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" .$number."\n\n" . $_POST['message'];
        
        $headers = "MIME-Version: 1.0\r\n";  
        $headers .= "Content-type: text/plain; charset=utf-8\r\n"; 
        $headers .= "Reply-To: ".$from." <".$from.">\r\n";
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2);
        echo "<center>"."Mail Sent. Thank you " . $email . ", we will contact you shortly."."<br><br>";     
        // header("location:thanks.php");
        
    }
    // setTimeout(function () {
    //     window.location.href= 'https://holozonencr.com/book-now/book-now.html'; 
     
    //  },5000); 



    
    
    // $toEmail = 'shami.lkct@gmail.com'; 
    // $fromName = 'shami'; 
    // $formEmail = 'shami.lkct@gmail.com'; 
     
    // $postData = $statusMsg = $valErr = ''; 
    // $status = 'error'; 
     
    // if(isset($_POST['submit'])){ 
    //     $postData = $_POST; 
    //     $name = trim($_POST['name']); 
    //     $email = trim($_POST['email']); 
    // 	$number = trim($_POST['number']);
    //     $subject = trim($_POST['subject']); 
    //     $message = trim($_POST['message']); 
         
    //     if(empty($name)){ 
    //          $valErr .= 'Please enter your name.<br/>'; 
    //     } 
    //     if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
    //         $valErr .= 'Please enter a valid email.<br/>'; 
    //     } 
    //     if(empty($subject)){ 
    //         $valErr .= 'Please enter subject.<br/>'; 
    //     } 
    //     if(empty($message)){ 
    //         $valErr .= 'Please enter your message.<br/>'; 
    //     } 
         
    //     if(empty($valErr)){ 
    //         $subject = 'New contact request submitted'; 
    //         $htmlContent = " 
    //             <h2>Contact Request Details</h2> 
    //             <p><b>Name: </b>".$name."</p> 
    //             <p><b>Email: </b>".$email."</p> 
    // 			<p><b>Email: </b>".$number."</p>
    //             <p><b>Subject: </b>".$subject."</p> 
    //             <p><b>Message: </b>".$message."</p> 
    //         "; 
             
    //         $headers = "MIME-Version: 1.0" . "\r\n"; 
    //         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    //         $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
             
    //         @mail($toEmail, $subject, $htmlContent, $headers); 
             
    //         $status = 'success'; 
    //         $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.'; 
    //         $postData = ''; 
    //     }else{ 
    //         $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    //     } 
    // }
    



?>

<!DOCTYPE html>
<html>
<head>
<title>Thank</title>
<meta http-equiv="refresh" content="5;url=https://holozonencr.com/book-now/book-now.html">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  border-radius: 12px;
  padding: 20px;
  margin: auto;
  width:50%;
  background-color:orange;
}
</style>
</head>
<body>
<div class="container">
  <center><h1 class="display-3">Thank You!</h1></center>
  <hr>
</div>
</body>
</html>