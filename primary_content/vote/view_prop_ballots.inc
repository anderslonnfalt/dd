<?php
	$propinfo = db_prop::get_prop_info($_GET['id']); 
	$ballots = db_prop::get_prop_supporters($_GET['id']); 
?>

<h1>Alla r�ster om propositionen <?php echo $propinfo['title']; ?></h1>

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
			<?php if($ballot['support_type'] == "support") : ?>
				St�der
			<?php elseif($ballot['support_type'] == "abstain") : ?>
				Avst�r
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