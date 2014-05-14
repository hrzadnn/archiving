<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="classifications form">
			<?php echo $this->Form->create('Classification', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Edit Classification'); ?></h2>
					<hr/>
					<div class="well">
						<div class="control-group">
							<?php echo $this->Form->label('id', 'ID', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
	
						<div class="control-group">
							<?php echo $this->Form->label('parent_id', 'parent_id', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('parent_id', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('name', 'name', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('name', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('description', 'description', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('description', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
					</div>
				</fieldset>
					<div class="buttons-group">
						<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-small btn-primary doc-button')); ?>
						<?php echo $this->Html->link('Cancel', array('controller' => 'classifications', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button')); ?>
					</div>				<?php echo $this->Form->end(); ?>
		</div>
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
