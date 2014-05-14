<?php
	$appDescription = __d('AppDev', 'KBRI Archiving System');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $appDescription ?>
            <?php echo $title_for_layout ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');
			echo $this->fetch('script');

			echo $this->Html->css(array(         
                            'bootstrap.min',
							'general',
                            ));
			
			echo $this->Html->script(array(
			'jquery',
			'bootstrap.min'
			));
		?>
	</head>
	<body>
		<div class="container">
			<!-- <?php echo $this->Session->flash('auth'); ?> -->
			
			<?php echo $this->fetch('content');?>
		</div>
	
	</body>
</html>
