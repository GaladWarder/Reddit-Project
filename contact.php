<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'The Reddit Project'; 
    $to = 'galadwarder@yahoo.com'; 
    $subject = 'New Message!';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {  ?>			 
        if (mail ($to, $subject, $body, $from)) { 
	    <script language="javascript" type="text/javascript">
			alert('Your message has been sent - I will be in contact with you soon!');
			window.location = 'index.html';
		</script>
		
	<?php
	} 
	else if ($_POST['submit'] && $human != '4') { ?>
	
		<script language="javascript" type="text/javascript">
			alert('You answered the anti-spam question incorrectly...Are you sure you are human?');
			window.location = 'index.html';
		</script> 
		
	<?php
	}
	else { ?>
	
	    <script language="javascript" type="text/javascript">
			alert('Oops! Something went wrong. Please email me directly at galaddota@yahoo.com');
			window.location = 'index.html';
		</script> 
		
	<?php
    
    }
?>