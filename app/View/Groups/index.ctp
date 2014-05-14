		<div class="groups index">
			<h3><?php echo __('Groups'); ?></h3>
			<hr/>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<tr>
						<th><?php echo $this->Paginator->sort('Group ID'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					
					<?php foreach ($groups as $group): ?>
						<tr>
							<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
							<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
							<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
							<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?> |
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?> |
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array(), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
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
			</div>
