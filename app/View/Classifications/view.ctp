<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="classifications view">
			<h2><?php  echo __('Classification'); ?></h2>
			<hr/>
				<table class="table table-striped table-bordered">
					<tr>		
						<td><strong><?php echo __('Classification ID'); ?></strong></td>
						<td><?php echo h($classification['Classification']['id']); ?>&nbsp;</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Name'); ?></strong></td>
						<td><?php echo h($classification['Classification']['name']); ?>&nbsp;</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Description'); ?></strong></td>
						<td><?php echo h($classification['Classification']['description']); ?>&nbsp;</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Created'); ?></strong></td>
						<td><?php echo h($classification['Classification']['created']); ?>&nbsp;</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Modified'); ?></strong></td>
						<td><?php echo h($classification['Classification']['modified']); ?>&nbsp;</td>
					</tr>
				</table><!-- .table table-striped table-bordered -->
				<?php 
				echo $this->Html->link(__('Back to classification list'), array('controller' => 'classifications', 'action' => 'index'), array('class' => 'btn btn-danger btn-small'));
				?>	
		</div><!-- .view -->			
	</div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->
