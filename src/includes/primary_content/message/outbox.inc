<?php 
	__h1("Utkorg");
	$message_count = db_message::get_outbox_count($_SESSION['id']);
	if($message_count) {
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$sort = isset($_GET['sort']) ? $_GET['sort'] : 0;
		$outbox = db_message::get_outbox($_SESSION['id'], $page, $sort);
		__open_form();
		__hidden("delete", 1);
		\View\message::output_outbox($outbox, $page, $message_count);
		__br();
		echo '<input type="checkbox" name="checkall" onclick="checkAll(this, \'delete_checkbox\');">' . "Markera alla";
		__br();
		__submit_and_close("Ta bort markerade");
	}
	else
		echo "Inga meddelanden.";
?>