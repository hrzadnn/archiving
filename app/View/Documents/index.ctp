<div class="documents index">
	<h3><?php echo __('Documents'); ?></h3>
	<hr/>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-bordered">
		<tr>
			<th><?php echo $this->Paginator->sort('archive_id'); ?></th>
			<th><?php echo $this->Paginator->sort('User'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
				<th><?php echo $this->Paginator->sort('amount_docs'); ?></th>
				<th><?php echo $this->Paginator->sort('box_number'); ?></th>
				<th><?php echo $this->Paginator->sort('folder_number'); ?></th>
				<th><?php echo $this->Paginator->sort('Definitive number'); ?></th>
			<?php } ?>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>

		<?php foreach ($documents as $document): ?>
		<tr>
			<td><?php echo h($document['Document']['archive_id']); ?></td>
			<td><?php echo h($document['User']['first_name']) . " " . h($document['User']['last_name']); ?></td>
			<td><?php echo h($document['Document']['title']); ?>&nbsp;</td>
			<?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
				<td><?php echo h($document['Document']['amount_docs']); ?>&nbsp;</td>
				<td><?php echo h($document['Document']['box_number']); ?>&nbsp;</td>
				<td><?php echo h($document['Document']['folder_number']); ?>&nbsp;</td>
				<td><?php echo h($document['Document']['id']); ?>&nbsp;</td>
			<?php } ?>
			<td><?php echo $this->Time->format('d.m.Y G:i ', $document['Document']['created']); ?>&nbsp;</td>
			<td><?php echo $this->Time->format('d.m.Y G:i ', $document['Document']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $document['Document']['id'])); ?> 
					<?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
						|
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $document['Document']['id'])); ?> |
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $document['Document']['id']), array(), __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?>
					<?php } ?>
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