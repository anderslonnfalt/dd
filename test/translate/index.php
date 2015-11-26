<?php 
	include("../../helpers/init.inc");
	$phrase = isset($_POST['phrase']) ? $_POST['phrase'] : '';
	$expected = isset($_POST['expected']) ? $_POST['expected'] : '';
	$actual = _t($phrase);
	$output_class = $expected ? ($expected == $actual ? "correct" : "incorrect") : '';
?>
<html>
<head>
	<link href="../../helpers/css/index.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>DD Test - Translation</title>
	<style>
		label { display: block; width: 150px; }
		input[type="text"] { display: block; width: 500px; }
		.correct {color:green;}
		.incorrect {color:red;}
	</style>
</head>
<body>
	<div style="margin:20px;">
		<h1 style="font-size: 24px; font-family: Lato, sans-serif; font-weight: 700; margin-bottom: 30px; ">Test translation</h1><br>
		<form method="post" id="translate-form" action=""><p>
			<label for "phrase">Fras</label>
			<input type="text" name="phrase" id="phrase" tabindex="1" value="<?php echo $phrase; ?>">
			<br>
			<label for "expected">Förväntad översättning</label>
			<input type="text" name="expected" id="expected" tabindex="2" value="<?php echo $expected; ?>">
			<br>
			<label for "actual">Översättning</label>
			<input type="text" class="<?php echo $output_class; ?>" name="actual" id="actual" tabindex="3" readonly value="<?php echo $actual; ?>">
			<br>
			<input type="submit" value="Översätt">
		</p></form>
	</div>
	<script type="text/javascript" language="JavaScript">
	window.setTimeout(function() { document.forms["translate-form"]["phrase"].focus(); },0);
	</script>
</body>
</html>