<!-- app/View/Users/add.ctp -->

<div class="users_form">

    <?php echo $this->Form->create(array('action' => 'register')); ?>
        <fieldset>
            <legend><?php echo __('Add User'); ?></legend>
            <?php
                echo $this->Form->input('first_name');
                echo $this->Form->input('last_name');
                echo $this->Form->input('username');
                echo $this->Form->input('email');
                
                echo $this->Form->input('password_confirm', array(
					'label' => 'Password',
                    'type' => 'password',
				));
                        
                echo $this->Form->input('password', array(
                	'label' => 'Password confirm'
				));
				
                echo $this->Form->input('department', array('options' => array(
                	'pensosbud' => 'Pendidikan dan Kebudayaan', 
                    'prokon' => 'Atase Pertahanan',
                    'admin' => 'Administrasi',
                    'politik' => 'Politik',
                    'komunikasi' => 'Komunikasi',
                    'ekonomi' => 'ekonomi',
                    'sekretariat' => 'Sekretariat',
                    'dcm' => 'DCM',
                    'athan' => 'Pertahanan',
                    'dagang' => 'Perdagangan',
                    'imigrasi' => 'Imigrasi',
                    'sekkabsus' => 'Sekkabsus',
				)));
				
                echo $this->Form->input('group_id');
            ?>
        </fieldset>
    <?php echo $this->Form->end('Add User'); ?>
</div>