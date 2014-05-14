<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="classifications index">
			<h3><?php echo __('Classifications'); ?></h3>
			<hr/>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('description'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($classifications as $classification): ?>
					<tr>
						<td><?php echo h($classification['Classification']['name']); ?>&nbsp;</td>
						<td><?php echo h($classification['Classification']['description']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $classification['Classification']['id'])); ?> |
							<?php #echo $this->Html->link(__('Edit'), array('action' => 'edit', $classification['Classification']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $classification['Classification']['id']), array(), __('Are you sure you want to delete # %s?', $classification['Classification']['id'])); ?>
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
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
