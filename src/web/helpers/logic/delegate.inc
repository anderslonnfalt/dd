<?php
namespace Logic;

class delegate 
{
	public static function delete_delegate_for_user ($user_id)
	{
		$delegate_id = \db_delegate::get_delegate_id_from_user_id($user_id);
		if ($delegate_id)
			return self::delete_delegate($delegate_id);
	}

	public static function act_as_delegate() 
	{
		$delegate_activated = \db_delegate::change_acting_as_delegate($_SESSION['id'], true);
		if ($delegate_activated)
			$_SESSION['delegate_id'] = \db_delegate::get_delegate_id_from_user_id($_SESSION['id']);
		return $delegate_activated;
	}

	public static function act_as_individual() 
	{
		$delegate_deactivated = \db_delegate::change_acting_as_delegate($_SESSION['id'], false);
		if ($delegate_deactivated)
			$_SESSION['delegate_id'] = 0;
		return $delegate_deactivated;
	}

	public static function register_delegation_from_post() 
	{
		if(isset($_POST['ballot'])){
			if($_SESSION['delegate_id']){
				$voter_id = $_SESSION['delegate_id'];
				$ballot = json_decode($_POST['ballot'], true);
				$constituency_id = $ballot['constituency_id'];
				$delegate_id = $ballot['delegate_id'];
				$ok = \db_delegate::register_delegation(null, $voter_id, $delegate_id, $constituency_id);
				if($ok)
					$_SESSION['report_message'] = "Din delegats delegering är registrerad.";
				else
					\Logic\util::report_error("Något gick fel. Ingen delegering registrerad.");
			}
			else{
				$user_constituencies = \db_constituency::get_constituencies_for_voter($_SESSION['id']);
				$user_constituency_ids = array();
				foreach($user_constituencies as $row)
					$user_constituency_ids[] = $row['id'];
				$user_constituency_ids_serialized = serialize($user_constituency_ids);
				$post_vars = array("user_id" => $_SESSION['id'], "user_constituencies" => $user_constituency_ids_serialized, "ballot" => $_POST['ballot']);
				$reply = \crypt_helpers::curl_to_anon_server("anonymise_delegation_ballot.php", $post_vars);
				if($reply == "success")
					$_SESSION['report_message'] = "Din delegering är registrerad.";
				else
					\Logic\util::report_error("Något gick fel. Ingen delegering registrerad eftersom: " . $reply);
			}
		}		
	}

	private static function delete_delegate ($delegate_id)
	{
		\Logic\vote::remove_delegate_ballots($delegate_id);
		\Logic\vote::remove_delegate_delegations($delegate_id);
		\db_constituency::remove_constituency_access($delegate_id);
		return \db_delegate::delete_delegate($delegate_id);			
	}
}
