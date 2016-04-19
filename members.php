 <?php 
 $to = $_REQUEST['Email'] ; 
 $name = $_REQUEST['Name'] ; 
 $subject = "Email Confirmation"; 
 $headers = "From: noreply@YourCompany.com"; 
 
 $fields = array(); 
 $fields{"Name"} = "Name"; 
 $fields{"Company"} = "Company"; 
 $fields{"Email"} = "Email"; 
 $fields{"Phone"} = "Phone"; 
 $fields{"list"} = "Mailing List"; 
 $fields{"Message"} = "Message"; 
 
 $body = "We have received the following information:\n\n"; 
 foreach($fields as $a => $b)
	{ 	$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); } 
 

 
 if($from == '') {print "You have not entered an email, please go back and try again";} 
 else { 
 if($name == '') {print "You have not entered a name, please go back and try again";} 
 else { 
 $send = mail($to, $subject, $body, $headers); 

}
 ?> 