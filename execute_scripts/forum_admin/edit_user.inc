<?php
	if(!empty($_POST['check_list'])) {
		$ok = db_forum_admin::update_forums_for_user($_POST['check_list'], $_GET['id']);
	}

	if($ok>0){
		$_SESSION['report_message'] = "Forumbeh�righeter uppdaterade.";
		$redirect = $_SERVER['REQUEST_URI'];
	}
	else{
		$_SESSION['report_message'] = "Inga �ndringar gjorda.";
		$redirect = $_SERVER['REQUEST_URI'];
	}
?>