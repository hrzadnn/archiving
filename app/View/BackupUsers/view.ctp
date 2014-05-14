<?php pr($user)?>

<legend>
    <?php 
        echo __('User Detail');
    ?>
</legend>

<dl>
    <dt>User ID</dt>
    <dd><?php echo $user['User']['UserID']; ?></dd>
    
    <dt>First Name</dt>
    <dd><?php echo $user['User']['firstname']; ?></dd>
    
    <dt>Last Name</dt>
    <dd><?php echo $user['User']['lastname']; ?></dd>
    
    <dt>Username</dt>
    <dd><?php echo $user['User']['username']; ?></dd>
    
    <dt>Role</dt>
    <dd><?php echo $user['User']['role']; ?></dd>
    
    <dt>Created</dt>
    <dd><?php echo $user['User']['created']; ?></dd>
    
    <dt>Modified</dt>
    <dd><?php echo $user['User']['modified']; ?></dd>
    
    <dt>Last Login</dt>
    <dd><?php echo $user['User']['lastlogin']; ?></dd>
    
    <dt>User Group</dt>
    <dd><?php echo $user['User']['usergroup']; ?></dd>
</dl>