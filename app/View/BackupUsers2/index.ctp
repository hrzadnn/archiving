<div id="page-container" class="row-fluid">
	<div id="sidebar" class="span2">
		<div class="actions">
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Html->link(__('Add Users'), array('controller' => 'users', 'action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		</div><!-- .actions -->
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span10">
		<div class="users index">
			<h2><?php echo __('List of Users'); ?></h2>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<tr>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('username'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('group_id'); ?></th>
						<th><?php echo $this->Paginator->sort('department_id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td>
							<?php echo h($user['Group']['name'], array(
								'controller' => 'groups', 
								'action' => 'view', 
								$user['Group']['name']
								)); 
							?>
						</td>
						<td>
							<?php echo h($user['Department']['name'], array(
								'controller' => 'departments', 
								'action' => 'view',
								$user['Department']['name']
								));
							?>
						</td>
						<td><?php echo $this->Time->format('d.m.Y G:i ', $user['User']['created']); ?>&nbsp;</td>
						<td><?php echo $this->Time->format('d.m.Y G:i ', $user['User']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-mini')); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-mini')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>			</small></p>

			<div class="pagination">
				<ul>
					<?php
						echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
						echo " | ";
						echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					?>
				</ul>
			</div><!-- .pagination -->
		</div><!-- .index -->
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
