<?php 
	require_once 'twitter.php';
	twitterProtect();

	/* You are now logged in, anything below this point will only
	 * be visible to users who are logged in.
	 */
	echo "<p>You are logged in as ".$_SESSION['logged_in'].".</p>";
	echo "<a href=\"logout.php\">Logout</a>";

?>