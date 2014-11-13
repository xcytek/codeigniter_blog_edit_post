<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Entries</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?php if (!empty($entries)) : ?>
		<?php foreach($entries as $entry) : ?>
		    <?php 
		        if (isset($my_entries) && in_array($entry->id, $my_entries)) {
		            $edit   = 'edit'; 
		            $delete = 'delete';
		        } else {
		            $edit   = ' ';
		            $delete = ' ';
		        }
		    ?>
			<h2><?=anchor(base_url().'blog/view/'.$entry->id,$entry->title)?></h2>
			<h3>
			    <?=anchor(base_url().'blog/edit/'.$entry->id, $edit)?>
			    <?=anchor(base_url().'blog/delete/'.$entry->id, $delete)?>
			</h3>
			Author: <?=$entry->author?><br />
			Date: <?=convertDateTimetoTimeAgo($entry->date)?><hr />
		<?php endforeach; ?>
	<?php else : ?>
		<h1>No entries</h1>
	<?php endif; ?>
</body>
</html>