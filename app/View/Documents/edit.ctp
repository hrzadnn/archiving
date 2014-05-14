<div class="container-fluid">
	<h3><?php echo __('Edit Document'); ?></h3>
	<hr/>
	<div class="row-fluid">
		<!-- 
		<div class="span2">
				<ul class="nav nav-list bs-docs-sidenav">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Document.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Document.id'))); ?></li>
					<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Classifications'), array('controller' => 'classifications', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Classification'), array('controller' => 'classifications', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Parent Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
		-->
	
		<div class="span9">
				<div class="documents form">
					<?php echo $this->Form->create('Document', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
						<fieldset>
							<div class="well">
								<div class="control-group">
									<?php echo $this->Form->label('classification_id', 'Primary Function', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('classification_id', array('options' => $primaryClassifications, 'class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
		
								<div class="control-group">
									<?php echo $this->Form->label('secondary_classification_id', 'Secondary Function', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('secondary_classification_id', array('options' => $secClassifications, 'class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
								
								<div class="control-group">
									<?php echo $this->Form->label('tertiary_classification_id', 'Third Function', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('tertiary_classification_id', array('options' => $terClassifications,'class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
								
								<div class="control-group">
									<?php echo $this->Form->label('title', 'Title', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('title', array('class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
								
								<div class="control-group">
									<?php echo $this->Form->label('description', 'Description', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('description', array('class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
							</div>
							<?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
							<div class="well">
								<div class="control-group">
									<?php echo $this->Form->label('amount_docs', 'Amount Documents', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('amount_docs', array('class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
								
								<div class="control-group">
									<?php echo $this->Form->label('box_number', 'Box Number', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('box_number', array('class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
								
								<div class="control-group">
									<?php echo $this->Form->label('folder_number', 'Folder Number', array('class' => 'control-label'));?>
									<div class="controls">
										<?php echo $this->Form->input('folder_number', array('class' => 'span12')); ?>
									</div><!-- .controls -->
								</div><!-- .control-group -->
							</div>		
							<?php } ?>		
						</fieldset>
					</div>
				</div>
				<div class="buttons-group">
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-small btn-primary doc-button')); ?>
					<?php echo $this->Html->link('Cancel', array('controller' => 'documents', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button')); ?>
				</div>
				<br/>
				<?php echo $this->Form->end(); ?>
			</div>
		</div><!-- #page-content .span9 -->

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