
<?php 
	__h1("Föreslagna arbetsgrupper");
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$workgroups = db_workgroup::list_proposed($page);
	\View\workgroup::list_workgroups($workgroups);
?>

