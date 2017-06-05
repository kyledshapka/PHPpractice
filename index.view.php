<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		header {
			background: lightgray;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1> Task for the Day </h1>
	<ul>
		<li>
			<strong><?= "Name"; ?>:</strong> <?= $task["title"]; ?>
		</li>
		<li>
			<strong><?= "Due date"; ?>:</strong> <?= $task[ "due" ]; ?>
		</li>
		<li>
			<strong><?= "Person Responsible"; ?>:</strong> <?= $task[ "assigned_to" ]; ?>
		</li>
		<li>
			<strong><?= "Completed"; ?>:</strong>
			<?php if ($task["completed"]) : ?>
				<span class="icon">&#9989;</span>
			<?php else : ?>
				<span class="icon">Incomplete</span>
			<?php endif; ?>
		</li>				
	</ul>
	</header>
</body>
</html>