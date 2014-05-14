<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="documents view">
			<h3><?php  echo h($document['Document']['archive_id']) . ": " . h($document['Document']['title']); ?></h3>
			<hr/>
			<table class="table table-striped table-bordered">
				<tr>
					<td><strong><?php echo __('Classification ID'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['archive_id']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('User'); ?></strong></td>
					<td>
						<?php echo h($document['User']['first_name']) . " " . h($document['User']['last_name']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Title'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['title']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Description'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['description']); ?>
						&nbsp;
					</td>
				</tr>
				<?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
				<tr>
					<td><strong><?php echo __('Amount Docs'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['amount_docs']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Box Number'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['box_number']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Folder Number'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['folder_number']); ?>
						&nbsp;
					</td>
				</tr>
				<?php } ?>
				<tr>
					<td><strong><?php echo __('Created'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['created']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>		
					<td><strong><?php echo __('Modified'); ?></strong></td>
					<td>
						<?php echo h($document['Document']['modified']); ?>
						&nbsp;
					</td>
				</tr>
		</table><!-- .table table-striped table-bordered -->
		<?php 
			echo $this->Html->link(__('Back to documents list'), array('controller' => 'documents', 'action' => 'index'), array('class' => 'btn btn-danger btn-small'));
		?>	
		</div><!-- .view -->
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
