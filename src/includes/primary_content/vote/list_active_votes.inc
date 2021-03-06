<?php 
	__h1("Pågående omröstningar");
	$statuses = array('active', 'del_ended', 'continuous');
	$vote_count = db_vote::list_votes_count($_SESSION['id'], $statuses);
	if ($vote_count) {
		$vote_groups = \Logic\vote::get_vote_groups($statuses);
		\View\vote::make_vote_list($vote_groups, $vote_count, "vote", "view_vote");
	}
	else 
		echo "Det finns inga pågående omröstningar i dina valkretsar.";
?>
