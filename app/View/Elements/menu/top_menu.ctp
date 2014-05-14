<script>
	window.jQuery || document.write('<script src="http://iqdial.co.in/javascripts/jquery.js">
</script>

<!--
<div id = "top_nav">
	<span class="lgin" style="display:block;" >
		<span class="cp" onclick="$('#acc_opt').show();$('#acc_opt').focus();_ct('acc','dtpg');">
			<h4 style= "float: right;"></h4>
           <span class="opt"></span>
		</span>
		<div id="acc_opt" style="display:none;">
           <a href="#">My Ratings</a>
           <a  href="#">My Friends Ratings</a>
           <a  href="#">Tag Your Friends</a>
           <a  href="#">Edit Profile</a>
           <a  href="#">Change Password</a>
           <a class="nb" onclick="#" href="#">Logout</a>
   		</div>
	</span>
</div>

<h4 style="float:right;">Hallo,
		        <a class="brand" target="_blank" href="#">
		            <?php echo __('Admin'); ?>
		        </a>
		    </h4>
-->

<div class="navbar">
    <div id ="home_logo">
        <a href="#">
            <?php
            echo $this->Html->image('toplogo.png', array(
                'alt', 'Archiving System KBRI'
            ));
            ?>
        </a>
    </div>            
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar">Test</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div id="topmenu" class="nav-collapse">
                <ul  class="nav">
                    <li>
                        <?php echo $this->Html->link(__('Home', true), array('controller' => 'pages', 'action' => 'display', 'home')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('About', true), array('controller' => 'pages', 'action' => 'display', 'about')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Archives', true), array('controller' => 'documents', 'action' => 'index')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('User', true), array('controller' => 'users', 'action' => 'index')); ?>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>