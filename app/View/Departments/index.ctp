<div class="departments index">
	<h3><?php echo __('Department'); ?></h3>
	<hr/>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
		<tr>
			<th><?php echo $this->Paginator->sort('Dept. ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Created'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		
		<?php foreach ($departments as $department): ?>
			<tr>
				<td><?php echo h($department['Department']['id']); ?>&nbsp;</td>
				<td><?php echo h($department['Department']['name']); ?>&nbsp;</td>
				<td><?php echo h($department['Department']['created']); ?>&nbsp;</td>
				<td><?php echo h($department['Department']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $department['Department']['id']), array('class' => 'btn btn-mini')); ?> |
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $department['Department']['id']), array('class' => 'btn btn-mini')); ?> |
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $department['Department']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?>
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
