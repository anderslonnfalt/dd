<?php
namespace View;

class member 
{
	public static function output_edit_fields($user_data = null, $include_social_security_number = true, &$tab_index = 1) {
		__textfield("username", "Användarnamn", $tab_index++, $user_data, ['required' => null, 'autofocus' => null]);
		__textfield("first_name", "Förnamn", $tab_index++, $user_data);
		__textfield("last_name", "Efternamn", $tab_index++, $user_data);
		if ($include_social_security_number)
			__textfield("social_security_number", "Personnummer", $tab_index++, $user_data);
		__textfield("email", "Mejladress", $tab_index++, $user_data, ['required' => null]);
		__textfield("street_address", "Gatuadress", $tab_index++, $user_data);
		__textfield("zip_code", "Postnummer", $tab_index++, $user_data);
		__textfield("city_address", "Postort", $tab_index++, $user_data);
		self::output_county_selectors($user_data, $tab_index);
		__textfield("telephone1", "Telefon 1", $tab_index++, $user_data);
		__textfield("telephone2", "Telefon 2", $tab_index++, $user_data);
		__textfield("skype_name", "Skype-namn", $tab_index++, $user_data);
	}
	
	public static function output_county_selectors($user_data = null, &$tab_index = 1) {
		$counties = \db_constituency::get_counties_with_regions();
		self::set_regions_by_county_in_javascript($counties);
		self::output_region_selector($user_data, $tab_index++);
		self::output_county_selector($user_data, $counties, $tab_index++);
	}
	
	public static function output_member_list_filter ()
	{
		$show_deleted_control = isset($_SESSION['is_member_admin'])
			? self::generate_show_deleted_control()
			: null;
		\general_helpers::make_region_county_list_filter($show_deleted_control);
	}

	public static function output_member_list ($members, $page, $member_count) {
		\View\controls::output_paging_row($page, $member_count, null, LIST_ITEMS_PER_PAGE);
		self::output_member_grid($members);
		\View\controls::output_paging_row($page, $member_count, null, LIST_ITEMS_PER_PAGE);
	}

	private static function output_member_grid ($members) {
		$columns = array("Namn", "Användarnamn", "Län", "Kommun");
		$rows = array_map(function($member) {
			return array(
				_link($member['full_name'], "member", "view", "id=" . $member['id'])
				, $member['username']
				, $member['region']
				, $member['county']
			);
		}, $members);
		$row_styles = array_map(function($member) {return $member['deletion_time'] ? 'deleted' : '';}, $members);
		$column_classes = array("1" => "hide-800", "2" => "hide-400");
		\View\controls::output_grid_view($columns, $rows, $row_styles, $column_classes);
	}

	public static function link($user, $id_prop = 'id', $name_prop = 'full_name') {
		return _link($user[$name_prop]
			, 'member', 'view', 'id=' . $user[$id_prop]);
	}

	// makes the top links for choosing page and sorting alternatives for a list_of_links
	private static function generate_show_deleted_control (){
		$show_deleted = isset($_GET['show_deleted']) ? $_GET['show_deleted'] : 0;
		$html = '<input type="checkbox" name="show_deleted"' .
			($show_deleted ? ' checked' : '') 
			. ' id="show_deleted" onchange="this.form.submit()"><label for "show_deleted">' 
			. "Visa borttagna medlemmar" . '</label>';
		return _span($html, "list_sort_alternative");
	}

	private static function set_regions_by_county_in_javascript($counties) {
		$county_region_pairs_for_javascript = self::get_county_region_pairs_for_javascript($counties);
		echo '<script>' . $county_region_pairs_for_javascript . '</script>';
	}

	private static function get_county_region_pairs_for_javascript($county_rows) {
		$pairs = Array();
		foreach($county_rows as $row) {
			$county_id = $row['county_id'];
			$county_name = $row['county_name'];
			$region_id = $row['region_id'];
			$pairs[] = '"' . $county_id . '": {id: ' . $county_id . ', name: "' . $county_name 
			. '", region_id: ' . $region_id . '}';
		}
		$json = 'county_name_and_region_by_id = {' . PHP_EOL . implode("," . PHP_EOL, $pairs) . '};';
		return $json;
	}

	private static function output_region_selector($user_data, $tab_index) {
		$selected_county = $user_data ? $user_data['county_id'] : null;
		$selected_region = $selected_county 
			? \db_constituency::get_region_from_county($selected_county)
			: null;
		$regions = \db_constituency::get_regions();
		$region_options = \db_general::make_hash($regions, 'id', 'title');
		$region_options = array(0 => 'Alla län') + $region_options;
		\View\controls::output_labeled_selector("region_id", "Län"
			, $region_options, $selected_region
			, 'onchange="region_changed()" tabindex="' . $tab_index . '"');
	}

	private static function output_county_selector($user_data, $counties, $tab_index) {
		$county_options = \db_general::make_hash($counties, 'county_id', 'county_name');
		\View\controls::output_labeled_selector("county_id", "Kommun", $county_options, $user_data ? $user_data['county_id'] : null, 'onchange="county_changed()" tabindex="' . $tab_index . '"');
	}
}
?>
