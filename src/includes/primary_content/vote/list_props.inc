<?php 
	__h1("Aktiva propositioner");
	$status = 'pending';
	$prop_count = db_prop::list_props_count($status, $_SESSION['id']);
	if ($prop_count) {
		$prop_groups = \Logic\vote::get_prop_groups($status);
		\View\vote::make_proposition_list($prop_groups, $prop_count, "vote", "view_prop");
	}
	else 
		echo "Det finns inga aktiva propositioner i dina valkretsar";
?>