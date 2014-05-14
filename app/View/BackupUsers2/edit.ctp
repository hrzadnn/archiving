<div id="page-container" class="row-fluid">
	<div id="sidebar" class="span2">
		<div class="actions">
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->		
		</div><!-- .actions -->
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span10">
		<div class="users form">
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Edit User'); ?></h2>
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
						<?php echo $this->Form->label('email', 'E-Mail', array('class' => 'control-label'));?>
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

				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
		</div>
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
