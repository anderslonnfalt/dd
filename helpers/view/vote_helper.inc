<?php
namespace View;

class vote_helper 
{
	public static function make_vote_type_selector() {
		$options = array(
			"yes-no" => "Votering (ja/nej)"
			,"prio-vote" => "Prioritetsomr�stning"
			,"candidate-election" => "Personval"
			,"median" => "Medianomr�stning"
			,"budget" => "Budgetomr�stning"
			);
		general_helper::make_selector("type_of_vote", "Typ av omr�stning", 1, $options);
	}	

	public static function make_constituency_selector() {
		$options = array();
		$constituencies = \db_constituency::get_constituencies_for_user($_SESSION['id']);
		foreach($constituencies as $row)
			$options[$row['id']] = $row['name'];
		general_helper::make_selector("constituency_id", "Valkrets", 2, $options);
	}	

	public static function make_title_input() {
		general_helper::make_textfield("new_prop_title", "Titel", 3);
	}	

	public static function make_description_input() {
		general_helper::make_textarea("new_prop_description", "Beskrivning", 4);
	}

	public static function make_vote_list($vote_groups, $type, $action) {
		general_helper::open_div("list_of_links");
		foreach($vote_groups as $vote_group) {
			echo '<h2>' . $vote_group->constituency . '</h2>';
			foreach($vote_group->votes as $row)
				general_helper::make_internal_link($row['title'], $type, $action, '&id=' . $row['id'], true);
		}
		general_helper::close_div("list_of_links");
	}
}
?>