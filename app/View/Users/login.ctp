<?php echo $this->Form->create('User', array('action'=>'login'), array('class' => 'form-horizontal')); ?>
	<fieldset class="fieldset-login">
    	<legend><?php echo $this->Html->image('toplogo.png'); ?></legend>
        
        <div class = "form-group">
        	<?php echo $this->Form->input('username', array(
            	'label' => array(
                	'class' => 'label-login control-label', 
                	'text' => 'Username'
                ),
                'placeholder' => 'Username',
			));?>
		</div>
        
        <div class = "form-group">
        	<?php echo $this->Form->input('password', array(
            	'label' => array(
                	'class' => 'label-login control-label', 
                	'text' => 'Password'
                ),
                'placeholder' => 'Password',
			));?>
    	</div>
    	
		<?php echo $this->Form->submit(__('Login'), array(
        	'class' => 'btn-danger btn-small right',
		)); ?>
	</fieldset>    