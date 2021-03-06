<?php 
	$sort = isset($_GET['sort']) ? $_GET['sort'] : null;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$search_query = \Logic\util::update_search_query("vote");
	$votes = db_vote::search_votes($search_query, $_SESSION['id'], $sort, $page);
	__h1("Funna omröstningar");
	if(empty($votes)) {
		__p("Inga omröstningar med sökfrasen: " . "<b><i>$search_query</i></b>" . " i rubrik eller beskrivning.");
	}
	else {
		$result_count = db_vote::search_votes_count($search_query, $_SESSION['id']);
		$vote_groups = \Logic\vote::group_by_constituency($votes);
		\View\vote::make_vote_list($vote_groups, $result_count, "vote", "view_vote", "search");
	} 
?>
