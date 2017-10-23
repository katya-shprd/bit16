<?php
/*
	file:	changepassword.php
	desc:	Displays the form for logged in user to change password
*/
?>
<h4>Change your password</h4>

<form action="updatepassword.php" method="post">
	Old password <input type="password" name="old" /><br />
	New password <input type="password" name="new" /><br />
	Confirm new <input type="password" name="conf" /><br />
	<input type="submit" value="Change password" />
</form>
<p><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']?></p>