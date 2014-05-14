<table id="main_archives">
    <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th> 
       <th>Username</th>
       <th>Role</th>
       <th>Created</th>
       <th>Modified</th>
       <th>Last Login</th>
       <th>Group</th>
       <th>Status</th>  
    </tr>
    
    <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <?php echo $user ['User']['UserID']?>
            </td>
            <td>
                <?php echo $user ['User']['firstname']?>
            </td>
            <td>
                <?php echo $user ['User']['lastname']?>
            </td>
            <td>
                <?php echo $user ['User']['username']?>
            </td>
            <td>
                <?php echo $user ['User']['role']?>
            </td>
            <td>
                <?php echo $user ['User']['created']?>
            </td>
            <td>
                <?php echo $user ['User']['modified']?>
            </td>
            <td>
                <?php echo $user ['User']['lastlogin']?>
            </td>
             <td>
                <?php echo $user ['User']['usergroup']?>
            </td>
            <td>           
                <?php echo $this->Html->link('Details', '/users/view'. $users['UserID']['UserID'])?>
                <?php echo $this->Html->link('Edit', '/users/edit'. $user['User']['UserID'])?>
                <?php echo $this->Html->link('Delete', '/users/delete'. $user['User']['UserID'])?>
            </td>
        </tr>
       <?php endforeach; ?>
      <?php unset ($user);?>       
    <?php ?>
</table>