<?php 
	$post_info = db_forum::get_full_post_info($_GET['id'], $_SESSION['id']);
	__h1("Rapportera inlägg");
	\View\forum::output_post($post_info, false);
__open_form("text-editor");
?>
	<fieldset>
		<legend class="report_post">Motivera varför detta inlägg ska rapporteras</legend>
		<input type="hidden" name="post_id" value="<?php echo $_GET['id']; ?>">
		<textarea name="report_post_argument" id="report_post_argument" rows="32" cols="30"></textarea><br>
        <div class="align-center">
		<button type="submit" id="report_post_submit" value="Rapportera">Rapportera</button>
        </div>
	</fieldset>
</form>
