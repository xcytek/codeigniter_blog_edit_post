<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Entry</title>	
</head>
<body>
	<?php 
	    include('menu.php'); 
	    $hidden = array('id' => $entry_data->id);
	?>
	<?=form_open(base_url().'blog/update_entry/', '', $hidden)?>
	<p>Title: <?=form_input('title', $entry_data->title)?></p>
	<p>Content: <?=form_textarea('content', $entry_data->content)?></p>
	<p>Tags: <?=form_input('tags', $entry_data->tags)?> (comma separated)</p>
	<?=form_submit('submit', 'Update')?>
</body>
</html>