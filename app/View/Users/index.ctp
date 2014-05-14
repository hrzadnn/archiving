		<div class="users index">
			<h3><?php echo __('List of Users'); ?></h3>
			<hr/>
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
				<?php	foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td>
							<?php echo h($user['Group']['name']); ?>
						</td>
						<td>
							<?php echo h($user['Department']['name']); ?>
						</td>
						<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?> |
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?> |
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			
			<p style="float: left">
				<small>
				<?php
					echo $this->Paginator->counter(array(
							'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?> 
				</small>
			</p>

			<ul class="paging" style="float: right; margin-top: 0px;">
			<?php
			echo $this->Paginator->prev('<< ' . __('Previous '), array('tag' => 'li'), null, array('class' => 'active', 'tag' => 'li'));
			echo $this->Paginator->numbers(array('separator' => '|', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
			echo $this->Paginator->next(__(' Next') . ' >>', array('tag' => 'li'), null, array('class' => 'active', 'tag' => 'li'));
			?>
			</ul>
		</div><!-- .index -->