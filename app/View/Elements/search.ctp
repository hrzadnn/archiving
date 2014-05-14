<script type="text/javascript">
$(document).ready(function(){
    $('.search').click(function(){
    	$(".search_box").animate(
    	    {height:'toggle'},
    	    800
    	); 
    });
});
</script>

<div id="page-container" class="row-fluid search_box">
	<div id="page-content" class="span9">
			<div class="documents form well">
			<?php 
				echo $this->Form->create($model, array('class' => 'custom'));
				foreach($fields as $key => $field) {
					if($key == "archive_id") {
						echo $this->Form->input($key, array('type' => 'text', 'label' => 'Search archive'));
					} elseif($key == "title") {
						echo "<div style=\"display:block; margin-top:5px;width:100%;height:1px;\"></div>";
						echo $this->Form->input($key, array('type' => 'text', 'label' => 'Search title & description'));
					} else {
						if(isset($field['values'])) {
							echo $this->Form->input($key, array('options' => $field['values'], 'empty' => TRUE));
						} else {
							echo $this->Form->input($key);
						}	
					}
				}
				echo "<br/>";
				echo $this->Form->submit(__('Search'), array('class' => 'btn btn-small btn-primary'))
			?>
		</div>
	</div>
</div>