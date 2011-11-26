<?php
// This is displayed if all the fields are not filled in
$empty_fields_message = "<span class='label important'>Please complete all the fields in the form.</span>";

// This is displayed when the message has been sent
$thankyou_message = "<span class='label success'>Thank you. Your message has been sent.</span>";

//Edit this subject
$smsSubject = "Sent via Sherzod.me";

if(isset($_POST['submit'])){
    $smsFrom = stripslashes($_POST['smsFrom']);
    $smsCo = stripslashes($_POST['smsCo']);
    $smsTo = stripslashes($_POST['smsTo']);
    $smsMessage = stripslashes($_POST['smsMessage']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Texter - Send free text messages to any US carrier.</title>
        
        <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script type='text/javascript' src='scripts/jquery.min.js'></script>
	<script type='text/javascript' src='scripts/charcounter.min.js'></script>
	<script type='text/javascript'>
	$(document).ready(function(){
	    $('#smsMessage').maxlength({
		slider: true,
		maxCharacters: 160,
		statusText : ' / 160',
		statusClass: 'charcounter'
	    });
	});
	</script>
</head>

<body>

<div class='container span9'>
    <div class='cleaner_h10'></div>
    
    <div class='row'>
	<h1>Texter</h1>
	<h4>mini app that lets you send a text message.</h4>
	
	<div class='cleaner_h10'></div>
	<?php
	if(isset($_POST['submit'])){
	    if (empty($smsFrom) || empty($smsTo) || empty($smsMessage)) {
		echo $empty_fields_message;
	    } else {
	    
		// Stop the form being used from an external URL
		// Get the referring URL
		$referer = $_SERVER['HTTP_REFERER'];
		// Get the URL of this page
		$this_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
		// If the referring URL and the URL of this page don't match then
		// display a message and don't send the email.
		if ($referer != $this_url) {
		    echo "<span class='label important'>You do not have permission to use this script from another URL.</span>";
		    exit;
		}
		
		$validSmsCo = Array('@txt.att.net', '@vtext.com', '@tmomail.net',
				    '@vmobl.com', '@cingularme.com', '@messaging.sprintpcs.com',
				    '@messaging.nextel.com');
		if(in_array($smsCo, $validSmsCo)){
		    $smsTo .= $smsCo;
		}else{
		    echo "<span class='label warning'>Problem when sending the message. Please try again.</span>";
		    exit;
		}
	    
	    
	    
		// The URLs matched so send the email
		mail($smsTo, $smsSubject, $smsMessage, "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\nFrom: $smsFrom <i@sherzod.me>");
		
		echo "<span class='label success'>Sent to $smsTo </span><br/>";
		
		// Display the thankyou message
		echo $thankyou_message;
	    }
	}
	?>
	<div class='cleaner_h10'></div>
	<div class='span9'>
	    <form method="post" action="">
	    
		<div class='clearfix'>
		    <label for="smsFrom">From:</label>
		    <div class='input'>
			<input type="text" title="Enter your name or phone number" name="smsFrom" id='smsFrom' class='span3' <?php echo isset($smsFrom) ? "value='$smsFrom'" : ""; ?>/>
			<span class="help-block">Your name or phone number</span>
		    </div>
		</div>
		
		<div class='clearfix'>
		    <label for="smsTo">To:</label>
		    <div class='input'>
			<div class='input-prepend'>
			    <span class='add-on'>+1</span>
			    <input type="text" title="Enter receivers phone number (with area code)" name="smsTo" id='smsTo' style='width:125px;' <?php echo isset($smsTo) ? "value='$smsTo'" : ""; ?>/>
			</div>
			<span class="help-block">Eg. +12069998877</span>
		    </div>
		</div>
		
		<div class='clearfix'>
		    <label for='smsCo'>Company</label>
		    <div class='input'>
			<select name="smsCo" id='smsCo' class='span3'>
			<option value="@txt.att.net">AT&amp;T</option>
			<option value="@vtext.com">Verizon</option>
			<option value="@tmomail.net">T-Mobile</option>
			<option value="@vmobl.com">Virgin Mobile</option>
			<option value="@cingularme.com">Cingular</option>
			<option value="@messaging.sprintpcs.com">Sprint</option>
			<option value="@messaging.nextel.com">Nextel</option>
			</select>
		    </div>
		</div>
		
		<div class='clearfix'>
		    <label for="smsMessage">Message:</label>
		    <div class='input'>
			<textarea title="Enter your message" name="smsMessage" id='smsMessage' class='span3' rows='5'><?php echo isset($smsMessage) ? $smsMessage : ""; ?></textarea>
		    </div>
		</div>
		
		<div class='clearfix'>
		    <div class='input'>
			<input type="submit" value="Send" class='btn primary' name='submit'/>
		    </div>
		</div>
	    
	    </form>
	</div>
    </div><!-- end of row -->
</div><!-- end of container -->
</body>
</html>
