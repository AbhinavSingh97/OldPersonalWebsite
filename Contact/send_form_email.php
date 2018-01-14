<?php
 
if(isset($_POST['Email'])) {
 
 
    $email_to = "abhinav.s1997@yahoo.com";
 
    $email_subject = "Email from Personal Website";
 
    function died($error) {
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('Sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
    $first_name = $_POST['first_name']; 
 
    $last_name = $_POST['last_name']; 
 
    $email_from = $_POST['email'];
 
    $telephone = $_POST['telephone'];
 
    $comments = $_POST['comments'];
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
 
    $email_message = "Form details below.\n\n";
   
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
Thank you for contacting me. I will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>