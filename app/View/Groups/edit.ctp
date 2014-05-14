	<div id="page-content" class="span9">
		<div class="groups form">
			<?php echo $this->Form->create('Group', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h3><?php echo __('Edit Group'); ?></h3>
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
					<?php echo $this->Html->link('Cancel', array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button')); ?>
				</div>
		</div>
	</div><!-- #page-content .span9 -->
