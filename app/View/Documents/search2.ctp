<?php echo $this->Form->create('Search',array('action'=>'search'));?>
	<fieldset>
 		<legend><?php __('Docoument Search');?></legend>
	<?php
		echo $this->Form->input('Search.keywords');
		echo $this->Form->input('Search.id');
		echo $this->Form->input('Search.name',array('after'=>__('wildcard is *',true)));
		echo $this->Form->input('Search.body',array('after'=>__('wildcard is *',true)));
		echo $this->Form->input('Search.active',array(
			'empty'=>__('Any',true),
			'options'=>array(
				0=>__('Inactive',true),
				1=>__('Active',true),
			),
		));
		echo $this->Form->input('Search.created', array('after'=>'eg: >= 2 weeks ago'));
		echo $this->Form->input('Search.category_id');
		echo $this->Form->input('Search.tag');
		echo $this->Form->input('Search.tag_id');
		echo $this->Form->submit('Search');
	?>
	</fieldset>
<?php echo $this->Form->end();?>