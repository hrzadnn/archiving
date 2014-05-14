<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="users form">
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h3><?php echo __('Edit User'); ?></h3>
					<hr/>
					<div class="well">
						<div class="control-group">
							<?php echo $this->Form->label('first_name', 'First Name', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('first_name', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('last_name', 'Last Name', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('last_name', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('username', 'Username', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('username', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('password', 'Password', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('password', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('email', 'Email', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('email', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('group_id', 'Group', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('group_id', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
						
						<div class="control-group">
							<?php echo $this->Form->label('department_id', 'Department', array('class' => 'control-label'));?>
							<div class="controls">
								<?php echo $this->Form->input('department_id', array('class' => 'span12')); ?>
							</div><!-- .controls -->
						</div><!-- .control-group -->
					</div>
				</fieldset>
					<div class="buttons-group">
						<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-small btn-primary doc-button')); ?>
						<?php echo $this->Html->link('Cancel', array('controller' => 'documents', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button')); ?>
					</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
