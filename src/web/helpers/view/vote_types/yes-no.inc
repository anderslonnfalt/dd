<?php 
	if (\Logic\vote::is_active_vote($voteinfo['status'])) {
		echo "Lägg din röst:";
		__open_form("yes-no");
		__hidden("vote_id", $voteinfo['id']);
		__hidden("ballot");
		echo '<div class="vote-buttons">';
		// echo '<input type="submit" class="vote_button" id="green_vote" value="' . _t("Yes") . '"" onmousedown="return encrypt_yes_no_ballot(\'yes\')">';
		echo '<button type="submit" class="vote_button" id="green_vote" value="Ja" onmousedown="return encrypt_yes_no_ballot(\'yes\')">Ja</button>';
		// echo '<input type="submit" class="vote_button" id="red_vote" value="' . _t("No") . '" onmousedown="return encrypt_yes_no_ballot(\'no\')">';
		echo '<button type="submit" class="vote_button" id="red_vote" value="Nej" onmousedown="return encrypt_yes_no_ballot(\'no\')">Nej</button>';
		// echo '<input type="submit" class="vote_button" id="yellow_vote" value="Avstår" onmousedown="return encrypt_yes_no_ballot(\'abstain\')">';
		echo '<button type="submit" class="vote_button" id="yellow_vote" value="Avstår" onmousedown="return encrypt_yes_no_ballot(\'abstain\')">Avstår</button>';
		// echo '<input type="submit" class="vote_button" id="white_vote" value="Ångra röst" style="display: ' . (empty($delegate_ballot) ? 'none' : 'inline-block') . '" onmousedown="return encrypt_yes_no_ballot(\'cancel\')">';
		echo '<button type="submit" class="vote_button" id="white_vote" value="Ångra röst" style="display: ' . (empty($delegate_ballot) ? 'none' : 'inline-block') . '" onmousedown="return encrypt_yes_no_ballot(\'cancel\')">Ångra röst</button>';
		echo '</div></form>';
	}
