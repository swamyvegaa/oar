<?php


if( isset( $_POST['template-contactform-submit'] ) AND $_POST['template-contactform-submit'] == 'submit' ) {
    
    if( $_POST['template-contactform-name'] != '' AND $_POST['template-contactform-email'] != '' AND $_POST['template-contactform-message'] != '' ) {
        
		$name = $_POST['template-contactform-name'];
        
        $email = $_POST['template-contactform-email'];
        
        $message = $_POST['template-contactform-message'];
        
        $phone = $_POST['template-contactform-phone'];
        
        $toemail = "noreply@codehunk.me"; // Your Email Address
        
        $subject = 'Message From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage: $message";
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
		
		$sendEmail = mail($toemail, $subject, $body, $headers);
        
        if( $sendEmail == true ):
        
            echo '<div class="styledmsg successmsg clearfix"><div class="message clearfix">Thank You for Contacting Us. We will get Back to you as soon as possible.</div></div>';
        
        else:
            
            echo '<div class="styledmsg errormsg clearfix"><div class="message clearfix">An unexpected error occured. Please Try Again later.</div></div>';
        
        endif;
        
    } else {            
        
        echo '<div class="styledmsg errormsg clearfix"><div class="message clearfix">Please Fill up all the Fields and Try Again...!!</div></div>';
    
    }
    
} else {

    echo '<div class="styledmsg errormsg clearfix"><div class="message clearfix">An unexpected error occured. Please Try Again later.</div></div>';

}


?>