<?php 

require("init.inc");

		$query = "insert into constituencies (title, description, number_of_voters, forum_id) values (?, ?, ?, ?)";
		$values = Array("Allm�nt", "Den allm�nna kategorin f�r allt m�jligt", 0, 1);

		$con_id = db::insert($query, $values);

		$users = db_user::get_all_users();

		foreach ($users as $row) {
			db_constituency::add_constituency_access ($row['id'], $con_id);
		}
