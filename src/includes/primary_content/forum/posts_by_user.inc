<?php 
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$posts = db_forum::get_posts_by_user($_GET['id'], $_SESSION['id'], $page);
	$post_count = db_forum::get_post_count_by_user($_GET['id'], $_SESSION['id']);
	$user_full_name = db_user::get_user_full_name($_GET['id']);
	__h1("Inlägg av " . $user_full_name);
	if(empty($posts))
		__p("Inga inlägg.");
	else
		\View\forum::show_posts($page, $posts, $post_count);
?>

