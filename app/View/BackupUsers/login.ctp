<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Form->create('User', array('action'=>'login')); ?>
            <fieldset>
                <legend><?php echo __('Archive Application Indonesian Embassy'); ?></legend>
                <?php echo $this->Form->input('username');
                echo $this->Form->input('password');
            ?>
            </fieldset>
        <?php echo $this->Form->end(__('Login')); ?>
</div>