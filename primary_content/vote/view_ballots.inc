<?php
	$voteinfo = db_vote::get_vote_info($_GET['id']); 
	$ballots = db_vote::get_ballots($_GET['id']); 
?>

<h1>Alla r�ster i omr�stningen <?php echo $voteinfo['title']; ?></h1>

<?php if(empty($ballots)) : ?>
	Inga r�ster lagda.
<?php else : ?>

	<table class="responsive">
		<tr><th>R�stande</th><th>R�st</th><th>Delegat</th><th>R�stningstidpunkt</th></tr>

		<?php foreach ($ballots as $ballot) : ?>
			<tr><td>
			<?php if($ballot['user_code']) : ?>
				Anv�ndare
			<?php else : ?>
				<a href="index.php?type=vote&action=view_delegate&id=<?php echo $ballot['voter_is_delegate_id']; ?>"><?php echo $ballot['voter_is_delegate_name']; ?></a>
			<?php endif; ?>
			</td>
			<td>
			<?php if($ballot['ballot'] == "abstain") : ?>
				Avst�r
			<?php elseif($voteinfo['type'] == "yes-no") : ?>
				<?php if($ballot['ballot'] == "yes") : ?>
					Ja
				<?php elseif($ballot['ballot'] == "no") : ?>
					Nej
				<?php endif; ?>
			<?php elseif($voteinfo['type'] == "median") : ?>
				<?php echo $ballot['ballot']; ?>
			<?php elseif($voteinfo['type'] == "prio-vote" || $voteinfo['type'] == "candidate-election" || $voteinfo['type'] == "workgroup-election") : ?>
				<?php vote_helpers::get_prio_vote_result_for_single_voter($_GET['id'], json_decode($ballot['ballot'], true)); ?>
			<?php endif; ?>
			</td>
			<td>
			<?php if($ballot['delegate_id']) : ?>
				<a href="index.php?type=vote&action=view_delegate&id=<?php echo $ballot['delegate_id']; ?>"><?php echo $ballot['delegate_name']; ?></a>
			<?php endif; ?>
			</td>
			<td>
			<?php echo general_helpers::show_date($ballot['time_ballot_placed']); ?>
			</td></tr>
		<?php endforeach; ?>
	</table>

<?php endif; ?>