<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="users view">
			<h2><?php  echo __('User'); ?></h2>
			<table class="table table-striped table-bordered">
				<tr>		
					<td><strong><?php echo __('User ID'); ?></strong></td>
					<td>
						<?php echo h($user['User']['id']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('First Name'); ?></strong></td>
					<td>
						<?php echo h($user['User']['first_name']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Last Name'); ?></strong></td>
					<td>
						<?php echo h($user['User']['last_name']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Username'); ?></strong></td>
					<td>
						<?php echo h($user['User']['username']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Email'); ?></strong></td>
					<td>
						<?php echo h($user['User']['email']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Created'); ?></strong></td>
					<td>
						<?php echo h($user['User']['created']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Modified'); ?></strong></td>
					<td>
						<?php echo h($user['User']['modified']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>		
					<td><strong><?php echo __('Group'); ?></strong></td>
					<td>
						<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']), array('class' => '')); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Department'); ?></strong></td>
					<td>
						<?php echo $this->Html->link($user['Department']['name'], array('controller' => 'departments', 'action' => 'view', $user['Department']['id']), array('class' => '')); ?>
						&nbsp;
					</td>
				</tr>	
			</table><!-- .table table-striped table-bordered -->
		</div><!-- .view -->
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
