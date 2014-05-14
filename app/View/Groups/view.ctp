<div id="page-container" class="row-fluid">
	<div id="page-content" class="span9">
		<div class="groups view">
			<h3><?php  echo __('Group'); ?></h3>
			<hr/>
			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Group ID'); ?></strong></td>
					<td>
						<?php echo h($group['Group']['id']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Name'); ?></strong></td>
					<td>
						<?php echo h($group['Group']['name']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Created'); ?></strong></td>
					<td>
						<?php echo h($group['Group']['created']); ?>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td><strong><?php echo __('Modified'); ?></strong></td>
					<td>
						<?php echo h($group['Group']['modified']); ?>
						&nbsp;
					</td>
				</tr>
			</table><!-- .table table-striped table-bordered -->
		</div><!-- .view -->
					
			<div class="related">
				<h3><?php echo __('Related Users'); ?></h3>
				<?php if (!empty($group['User'])): ?>
					<table class="table table-striped table-bordered">
						<tr>
							<th><?php echo __('User ID'); ?></th>
							<th><?php echo __('First Name'); ?></th>
							<th><?php echo __('Last Name'); ?></th>
							<th><?php echo __('Username'); ?></th>
							<th><?php echo __('Email'); ?></th>
							<th><?php echo __('Created'); ?></th>
							<th><?php echo __('Modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						
						<?php $i = 0;	foreach ($group['User'] as $user): ?>
								<tr>
									<td><?php echo $user['id']; ?></td>
									<td><?php echo $user['first_name']; ?></td>
									<td><?php echo $user['last_name']; ?></td>
									<td><?php echo $user['username']; ?></td>
									<td><?php echo $user['email']; ?></td>
									<td><?php echo $user['created']; ?></td>
									<td><?php echo $user['modified']; ?></td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => 'btn btn-mini')); ?> |
										<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id']), array('class' => 'btn btn-mini')); ?> |
										<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $user['id'])); ?>
									</td>
								</tr>
						<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
				<?php endif; ?>
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-small btn-primary doc-button', 'escape' => false)); ?>				</div><!-- .actions -->
			</div><!-- .related -->
			<?php 
				echo $this->Html->link(__('Back to group list'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-small btn-danger doc-button'));
			?>	
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
