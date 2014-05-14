
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="documents view">

			<h2><?php  echo __('Document'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Classification Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['classification_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Amount Docs'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['amount_docs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Box Number'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['box_number']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Folder Number'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['folder_number']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['modified']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
