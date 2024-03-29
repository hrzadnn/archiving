<div id="page-container" class="row-fluid">
	<div id="sidebar" class="span3">
		<div class="actions">
			<ul class="nav nav-list bs-docs-sidenav">			
				<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => '')); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => '')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => '')); ?> </li>
				<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index'), array('class' => '')); ?> </li>
				<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add'), array('class' => '')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		</div><!-- .actions -->
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		<div class="users view">
			<h2><?php  echo __('User'); ?></h2>
				<table class="table table-striped table-bordered">				
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
						<td><strong><?php echo __('Last Login'); ?></strong></td>
						<td>
							<?php echo h($user['User']['last_login']); ?>
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
						<td><strong><?php echo __('Department Id'); ?></strong></td>
						<td>
							<?php echo h($user['Department']['name']); ?>
							&nbsp;
						</td>
				</tr>
			</table><!-- .table table-striped table-bordered -->
		</div><!-- .view -->
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
