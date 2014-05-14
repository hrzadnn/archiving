<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="documents form">
			<?php echo $this->Form->create('Document', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
					<h3><?php echo __('Register Document'); ?></h3>
					<hr/>
					<div class="well">
						<div class="control-group">
							<?php echo $this->Form->label('classification_id', 'Primary Function', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('classification_id', array('options' => $primaryClassifications, 'class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- Primary Function -->

						<div class="control-group">
							<?php echo $this->Form->label('secondary_classification_id', 'Secondary Function', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('secondary_classification_id', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- Secondary Function -->
						
						<div class="control-group">
							<?php echo $this->Form->label('tertiary_classification_id', 'Third Function', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('tertiary_classification_id', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- Tertiary Function -->
						
						<div class="control-group">
							<?php echo $this->Form->label('title', 'Title', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('title', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- Title -->
						
						<div class="control-group">
							<?php echo $this->Form->label('description', 'Description', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('description', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- Description -->
					</div>	
					<?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
						<div class="well">
							<div class="control-group">
								<?php echo $this->Form->label('amount_docs', 'Amount Documents', array('class' => 'control-label'));?>
								<div class="controls">
									<?php echo $this->Form->input('amount_docs', array('class' => 'span12')); ?>
								</div><!-- .controls -->
							</div><!-- Amount Document -->
							
							<div class="control-group">
								<?php echo $this->Form->label('box_number', 'Box Number', array(
									'class' => 'control-label',
									'admin' => TRUE
								));?>
								<div class="controls">
									<?php echo $this->Form->input('box_number', array(
									'class' => 'span12',
									'admin' => TRUE
									)); ?>
								</div><!-- .controls -->
							</div><!-- .control-group -->
							
							<div class="control-group">
								<?php echo $this->Form->label('folder_number', 'Folder Number', array(
								'class' => 'control-label',
								'admin' => TRUE
								));?>
								<div class="controls">
									<?php echo $this->Form->input('folder_number', array(
									'class' => 'span12',
									'admin' => TRUE
									)); ?>
								</div><!-- .controls -->
							</div><!-- .control-group -->	
						</div>					
					<?php } ?>
			<div class="buttons-group">
				<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-small btn-primary doc-button')); ?>
				<?php echo $this->Html->link('Cancel', array('controller' => 'documents', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button')); ?>
			</div>
			<br/>
			<?php echo $this->Form->end(); ?>			
		</div>
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->


<?php
$this->Js->get('#DocumentClassificationId')->event('click', 
	$this->Js->request(
		array(
			'controller'	=> 'documents',
			'action'		=> 'secondary_classifications'
		), 
		array(
			'update'			=>'#DocumentSecondaryClassificationId',
			'async' 			=> true,
			'method' 			=> 'post',
			'dataExpression'	=> true,
			'data'				=> $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		)
	)
);

$this->Js->get('#DocumentSecondaryClassificationId')->event('click', 
	$this->Js->request(
		array(
			'controller'	=> 'documents',
			'action'		=> 'secondary_classifications'
		), 
		array(
			'update'			=>'#DocumentTertiaryClassificationId',
			'async' 			=> true,
			'method' 			=> 'post',
			'dataExpression'	=> true,
			'data'				=> $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		)
	)
);
?>
