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
                            'bootstrap',
							'general'
                            ));
			
			echo $this->Html->script(array(
			'jquery',
			'bootstrap'
			));
		?>
	</head>

	<body>
			<!-- HEADER -->
			<div>
				<?php echo $this->element('menu/header');?>
			</div>
			
			<!-- CONTENT -->
			<div class="container">
				<!-- Search-->
				<?php 
					if($this->name == "Documents" && $this->action == "index") {
						echo $this->element('search');
					} 
				?>
				<?php echo $this->fetch('content');?>	
			</div>
			<?php echo $this->Js->writeBuffer(); ?>
	</body>
</html>