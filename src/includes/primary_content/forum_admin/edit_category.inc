<?php 
	$cat_info = db_forum_admin::get_category_info($_GET['id']);
	__h1($cat_info['title']);
	__open_form();
	__textfield("title", "Namn", 1, $cat_info);
	__textarea("description", "Beskrivning", 2, $cat_info);
	__br();
	__submit_and_close("Uppdatera");
	__h2("Forum i denna kategori");
	$sub_forums = db_forum_admin::list_sub_forums($_GET['id']); 
	if(!empty($sub_forums)) {
		foreach($sub_forums as $row) {
			echo '<div class="topic_list_row" style="text-align: left;">';
			echo '<span class="forum_name">';
			__link($row['forum_name'], 'forum_admin', 'edit_forum', 'id=' . $row['forum_id']);
			__br();
			echo '<span class="list_sub_text">' . $row['number_of_topics'] . ' ämnen, ' 
				. $row['number_of_posts'] . " inlägg" . '</span>';
			echo '</span>';
			echo '<span class="forum_last_post">';
			if(isset($row['last_posted_id'])) {
				$post_info = db_forum::get_post_info($row['last_posted_id']);
				__link($post_info['title'], 'forum_admin', 'edit_topic', 'id=' 
					. $post_info['topic_id']);
				__br();
				echo '<span class="list_sub_text">' . 'av ' 
					. \View\member::link($post_info, 'user_id') . ' ' . general_helpers::show_date($row['last_posted_time']) . '</span>';
			}
			else
				echo "Inga inlägg";
			echo '</span>';
			echo '<div style="clear: both;"></div>';
			echo '</div>';					
		}
	}
	else 
		echo "Inga underforum";
?>