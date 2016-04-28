<?php
	if (isset($_POST['activation'])) {
		$ok = db_user::activate_user($_SESSION['id']);
		if($ok){
			$_SESSION['report_message'] = "Din anv�ndare �r nu aktiverad.";
			$redirect = "index.php";
		}
	}	
?>
<div id="wrap">

<div class="login-column">
<div class="login_image">
	<img src="images/dd120.png">
</div>

<form method="post" class="login-form" action="">
	<input type="hidden" name="activation" value="1">
	
	<?php $user_first_name = db_user::get_activation_first_name($_SESSION['id']); ?>

	<p>Hej <?php echo $user_first_name; ?>!</p>

	<p>F�r att din anv�ndare ska aktiveras i det nya medlemssystemet m�ste du godk�nna f�ljande villkor: </p>

	<ul>
		<li>Dina personuppgifter lagras i systemets databas i enlighet med PUL</li>
		<li>Medlemsadministrat�ren kan se dina personuppgifter i databasen</li>
		<li>Ditt f�r- och efternamn samt din folkbokf�ringskommun visas f�r andra medlemmar</li>
	</ul>

	<p>Om du godk�nner detta kommer du att f� tillg�ng till systemet och du blir synlig f�r andra medlemmar i systemet.</p>

	<input type="hidden" name="activation_code" value="<?php echo $_GET['code']; ?>">
	<input type="submit" value="Jag godk�nner">
</form>

</div>
</div>

<script type="text/javascript" language="JavaScript">
window.setTimeout(function() { document.forms["login-form"]["username"].focus(); },0);
</script>