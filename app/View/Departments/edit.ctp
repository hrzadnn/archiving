<div id="page-content" class="span9">
	<div class="departments form">
		<?php echo $this->Form->create('Department', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
			<fieldset>
				<h3><?php echo __('Edit Department'); ?></h3>
				<hr/>
				<div class="well">
				<div class="control-group">
					<?php echo $this->Form->label('name', 'Name', array('class' => 'control-label'));?>
					<div class="controls">
						<?php echo $this->Form->input('name', array('class' => 'span12')); ?>
					</div><!-- .controls -->
				</div><!-- .control-group -->
				</div>
			</fieldset>
			<div class="buttons-group">
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-small btn-primary doc-button')); ?>
					<?php echo $this->Html->link('Cancel', array('controller' => 'departments', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button')); ?>
			</div>
		<?php echo $this->Form->end(); ?>
	</div>	
</div><!-- #page-content .span9 -->
