	<div id="page-content" class="span9">
		<div class="departments view">
			<h2><?php  echo __('Department'); ?></h2>
			<table class="table table-striped table-bordered">
				<tr>
					<td><strong><?php echo __('Department ID'); ?></strong></td>
					<td><?php echo h($department['Department']['id']); ?>&nbsp;</td>
				</tr>
				<tr>		
					<td><strong><?php echo __('Name'); ?></strong></td>
					<td><?php echo h($department['Department']['name']); ?>&nbsp;</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Created'); ?></strong></td>
					<td><?php echo h($department['Department']['created']); ?>&nbsp;</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Modified'); ?></strong></td>
					<td><?php echo h($department['Department']['modified']); ?>&nbsp;</td>
				</tr>			
			</table><!-- .table table-striped table-bordered -->
			<?php 
				echo $this->Html->link(__('Back to department list'), array('controller' => 'departments', 'action' => 'index'), array('class' => 'btn btn-danger btn-small'));
			?>	
		</div><!-- .view -->
	</div><!-- #page-content .span9 -->
