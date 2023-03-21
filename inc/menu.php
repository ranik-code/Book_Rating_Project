<?php
$userName = '';
$show = '';
if(!empty($_SESSION['userid']) && $_SESSION['userid']) {
	$userName =  $_SESSION['username'];		
} else {
	$show = 'hidden';
}
?>
<div id="loggedPanel" class="<?php echo $show; ?>">
	<b>Logged in : <span id="loggedUser" class="logged-user"><?php echo $userName; ?></span>
	<a href="action.php?action=logout">Logout</a></b>
</div>
<br><br><br>