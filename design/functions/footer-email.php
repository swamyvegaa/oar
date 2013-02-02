<?php


if( isset( $_POST['widget-contactform-submit'] ) AND $_POST['widget-contactform-submit'] == 'submit' ) {
    
    if( $_POST['widget-contactform-name'] != '' AND $_POST['widget-contactform-email'] != '' AND $_POST['widget-contactform-message'] != '' ) {
        
		$name = $_POST['widget-contactform-name'];
        
        $email = $_POST['widget-contactform-email'];
        
        $message = $_POST['widget-contactform-message'];
        
        $toemail = "noreply@codehunk.me"; // Your Email Address
        
        $subject = 'Footer Widget: Message From ' . $name;
		$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
		
		$sendEmail = mail($toemail, $subject, $body, $headers);
        
        if( $sendEmail == true ):
        
            echo '<div class="styledmsg successmsg clearfix"><div class="message clearfix">Thank You for Contacting Us.</div></div>';
        
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