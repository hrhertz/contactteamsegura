<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Contact Segura Realtor</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
<script language="javascript">
function handleField(){
	if(document.getElementById('field1').value == 'Other'){
			document.getElementById('ot-val').style.display = 'block';
	}else{
			document.getElementById('ot-val').style.display = 'none';
	}
}
</script>
</head>
<body>


<?php

// display form if user has not clicked submit

if (!isset($_POST["submit"])) {

?>


<div id="container">
	<div class="topcap"></div>
	<div class="logo"><img src="images/logo-sr.jpg" alt="" /></div>
	<div class="subject"><div class="subjectpad">
		<p>Contact Segura Realtor</p>
	</div></div>
	<div class="content"><div class="innerpad">


                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 


<!-- 
<form method="post" action="sendfeedback.php" name="ContactForm">
 -->


<!--Name-->
<p><label for="fieldname"> Your Name: <span class="optional"></span></label></p>
<div class="formfield">
	<input type="text" name="fieldname" id="fieldname" required >
</div>


<!--Field 1-->
<p><label for="field1">How did you initially find us?</label></p>
<div class="formfield">
	<select name="field1" id="field1" onchange="handleField();" required>
	<option value="Direct Mail">Direct Mail</option>
	<option value="Recommended by a friend">Recommended by a friend </option>
        <option value="Recommended by another realtor">Recommended by another Realtor</option>
        <option value="Past client">Past client</option>
        <option value="Church">Church</option>
        <option value="Google">Google</option>
        <option value="Zillow">Zillow</option>
	<option value="Trulia">Trulia</option>
        <option value="Yelp">Yelp</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Youtube">Youtube</option>
        <option value="Inquired about a house">Inquired about a house</option>
	<option value="Other">Other</option>
	</select>
	<br />
</div>

<!--Field 2-->
<p><label for="field2"> Your Phone Number. <span class="optional">(<em>Optional</em>)</span></label></p>
<div class="formfield">
	<input type="tel" name="field2" id="phone">
</div>

<!-- Field 3-->
<p><label for="field3"> Your Email.</label></p>
<div class="formfield">
        <input type="email" name="field3" id="email" required >
</div>


<!--Field 4-->
<p><label for="field4"> Please tell us your needs.</label></p>
<div class="formfield">
	<textarea id="field4" name="comments" rows="5" required></textarea>
</div>



<div class="submitbtn"><input type="submit" name="submit" class="button blue" value="Submit" /></div>
<input type="hidden" name="email" value="">
</form>
	</div></div>
</div>

<script>
$("#ContactForm").validate();
</script>

<!-- -->

<?php

} else {

	// the user has submitted the form
	// Check if the "from" input field is filled out

    $fieldname = $_POST["fieldname"];
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $field3 = $_POST["field3"];
    $comments = $_POST["comments"];

    // message lines should not exceed 70 characters (PHP rule), so wrap it

    $comments = wordwrap($comments, 70);

    // send mail

    mail("teamsegura@kems.com","Segura Realtor - Contact Form: $name","Name: $fieldname \n Found: $field1 \n Phone #: $field2 \n Email: $field3 \n Needs: $comments \n ");

	echo "<div id=\"container\">";
	echo "<div class=\"logo\"><img src=\"images/logo-ts.jpg\" alt=\"\"></div>";
	echo "<div class=\"subject\"><div class=\"subjectpad\"><p>Thank You</p></div></div>";
	echo "<div class=\"content\"><div class=\"innerpad\">";
	echo "<p>Thank you for contacting Segura Realtor";
	echo "</div></div>";


}

?>


<!-- -->

</body>
</html>
