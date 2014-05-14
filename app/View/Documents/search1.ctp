<h1>Search Document</h1>
	<?php 
	    echo $this->Form->create("Document",array('action' => 'search'));
	    echo $this->Form->input("q", array('label' => 'Search for'));
	    echo $this->Form->end("Search");
	?>
	
<table>
    <tr>
        <th>Archive ID</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

	<?php foreach ($results as $document): ?>
	    <tr>
	        <td><?php echo $document['Document']['id']; ?></td>
	        <td>
	            <?php echo $document['Document']['title'];?>
	                </td>
	        <td>
	        	<?php echo $this->Html->link(__('View'), array('action' => 'view', $document['Document']['id'])); ?> |
	        	<?php echo $this->Html->link(__('Borrow'), array('action' => 'view', $document['Document']['id'])); ?> |
	        </td>
	        <td><?php echo $post['Document']['created']; ?></td>
	    </tr>
	<?php endforeach; ?>
</table>