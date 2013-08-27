<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	echo $this->Html->meta('icon');
	
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	
	<div id="header">
		<h1>CakePHP with Bootstrap</h1>
	</div>
	<div id="container">
		
		

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
		
	</div>
	<div id="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => 'CakePHP', 'border' => '0')),
			'http://www.cakephp.org/',
			array('target' => '_blank', 'escape' => false)
			);
			?>
		</div>
		<?php echo $this->element('sql_dump'); ?>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</body>
	</html>
