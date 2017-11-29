<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <style>
    <?php include("css/form.css") ?>
    </style>
    <link href="css/mystyle.css" rel="stylesheet">
    <form class="formy" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <input name="name" type="text" value="" size="30" placeholder="Name"/><br>
    <input name="email" type="text" value="" size="30" placeholder="Email"/><br>
    <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("ekaterina.povarenko@edu.lapinamk.fi", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
		