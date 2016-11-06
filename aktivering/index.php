<?php 
include("../init.inc");
session::update_language();

if(isset($_POST['activation_code'])){
	$ok = db_user::activate_user($_POST['activation_code']);

	if($ok){
		$system_message = "Din anv�ndare �r nu aktiverad. G� till <a href=\"../index.php\">inloggningssidan</a> f�r att logga in.";
	}
	else{
		$system_message = "N�got gick fel, din anv�ndare kunde inte aktiveras. Pr�va igen <a href=\"index.php?code=" . $_POST['activation_code'] . "\">h�r</a> eller f�rs�k f� tag p� n�gon som har insyn i systemet om problemet kvarst�r.";
	}
}
elseif(isset($_POST['user_email'])){
	$email_exists = db_user::check_if_email_exists($_POST['user_email']);

	if($email_exists){
		$activation_code = db_user::get_activation_code_from_email($_POST['user_email']);

		if($activation_code){
			$mail_title = "Aktivera din anv�ndare i Direktdemokraternas nya medlemssystem";
			$link_to_activation_page = 
			$mail_content = "Detta mejl skickas till dig eftersom du beg�rt att f� en aktiveringskod f�r att kunna aktivera din anv�ndare i Direktdmeokraternas nya medlemssystem.<br>\n<br>\nKlicka p� nedanst�ende l�nk f�r att komma till aktiveringssidan:<br>\n";
			$mail_result = general_helpers::admin_mail($_POST['user_email'], $mail_title, $mail_content);

			if($mail_result == "success"){
				$system_message = "Ett mejl med aktiveringskod har skickats till den angivna adressen. F�lj instruktionerna i mejlet f�r att aktivera ditt konto.";
			}
			else{
				$system_message = "Adressen du angav finns i systemet men n�got gick fel n�r mejlet skulle skickas. G� tillbaka till f�reg�ende sida och f�rs�k igen eller f�rs�k f� tag p� n�gon som har insyn i systemet om problemet kvarst�r.";
			}
		}
		else{
			$system_message = "Det verkar som om anv�ndaren med den mejladressen redan �r aktiverad. G� till <a href=\"../index.php\">inloggningssidan</a> och f�rs�k logga in d�r.";
		}
	}
	else{
		$system_message = "Den mejladressen finns inte registrerad i systemet. Pr�va igen <a href=\"index.php?code=" . $_POST['activation_code'] . "\">h�r</a> eller f�rs�k f� tag p� n�gon som har insyn i systemet om problemet kvarst�r.";
	}
}

?>
<html><head>

<link href="../helpers/css/index.css" rel="stylesheet" type="text/css">
<link href="../helpers/css/login.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.ico">

<title>DD Medlemssystem ver <?php echo VERSION ?></title>

</head>

<body>

<div class="wrap">
<div class="login-column">
<div>
	<?php \View\index::output_language_buttons(); ?>
</div>
<div class="login_image">
	<img src="../images/dd120.png">
</div>

<br>

<h1 style="font-size: 24px; font-family: Lato, sans-serif; font-weight: 700; margin-bottom: 30px; ">Aktivera medlem
</h1>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="../helpers/js/constituency.js"></script>
<script src="../helpers/js/session.js"></script>

<?php if(isset($system_message)) : ?>
	<?php echo $system_message; ?>
<?php elseif(!empty($_GET['code'])) : ?>
	<?php $user_first_name = db_user::get_first_name_from_activation_code($_GET['code']); ?>
	
	<?php if(!empty($user_first_name)) : ?>
		<form method="post" action="" class="standard-form">
			<p>Hej <?php echo $user_first_name; ?>!</p>

			<p>F�r att din anv�ndare ska aktiveras i det nya medlemssystemet m�ste du godk�nna f�ljande villkor: </p>

			<ul>
				<li>Ditt f�r- och efternamn samt din folkbokf�ringskommun visas f�r andra medlemmar</li>
				<li>Dina �vriga personuppgifter lagras i systemets databas men kan bara ses av medlemsadministrat�ren</li>
			</ul>

			<p>Efter att du godk�nt detta kommer du att tas till inloggningssidan d�r du kan logga in med det anv�ndarnamn och l�senord som du haft i det tidigare medlemssystemet (WordPress). </p>

			<input type="hidden" name="activation_code" value="<?php echo $_GET['code']; ?>">
			<input type="submit" value="Jag godk�nner">
		</form>
	<?php else : ?>
		Aktiveringskoden verkar inte h�ra ihop med n�gon anv�ndare i systemet. Kanske har du redan blivit aktiverad eller s� �r koden helt enkelt fel.
	<?php endif; ?>
<?php else : ?>
	<form method="post" action="" class="standard-form">
		<p>Fyll i den mejladress som finns registrerad i systemet f�r dig i f�ltet h�r under. Ett mejl med en aktiveringskod kommer att skickas till den adressen och med hj�lp av den kan du sedan aktivera din anv�ndare och b�rja anv�nda det nya systemet.</p>
		<label for "user_email">Mejladress</label>
		<input type="text" name="user_email" id="user_email" value="">
		<input type="submit" value="Skicka">'
	</form>
<?php endif; ?>


<script type="text/javascript" language="JavaScript">
window.setTimeout(function() { document.forms["login-form"]["first_name"].focus(); },0);
</script>

</div>
</div>

</body>
</html>