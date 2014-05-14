<div class = "navbar navbar-inverse navbar-fixed-top">
	<div class = "container">				
		<?php echo $this->Html->link('Archiving System', 
			array( 'admin' => FALSE, 'plugin' => FALSE, 'controller' => 'pages', 'action' => 'display', 'home' ),
			array('class' => 'navbar-brand') ); ?>
			
		<!-- LEFT TOP MENU -->	
		  <ul class="nav navbar-nav" role="navigation">
		  	<!-- HOME -->
		    <li>
		    	<?php
					echo $this->Html->link(__('Home', true), array(
					'admin' => FALSE, 'plugin' => FALSE, 
					'controller' => 'pages', 'action' => 'display', 'home'));
		    	?>
		    </li>
		    <!-- ABOUT -->
		    <li>
		      	<?php 
		        	echo $this->Html->link(__('About', true), array(
		        	'admin' => FALSE, 'plugin' => FALSE,
		        	'controller' => 'pages', 'action' => 'display', 'about')); 
		       	?>
		    </li>
		    <!-- ARCHIVE -->
		    <li class="dropdown">
		    	<a id="drop1" data-toggle="dropdown" class="dropdown-toggle" href="#">
		    		Archive
		    	<b class="caret"></b>
		    	</a>
		    	<ul class="dropdown-menu">
		    		<li>
		    			<?php echo $this->Html->link(__('Index Archives', true), array(
				    		'admin' => FALSE, 
				    		'plugin' => FALSE,
				    		'controller' => 'documents', 
				    		'action' => 'index')); 
		    			?>
		    		</li>
		    		<li>
		    			<?php echo $this->Html->link(__('Register Document', true), array(
					    	'admin' => FALSE, 'plugin' => FALSE,
					    	'controller' => 'documents', 'action' => 'add'));
		    			?>
		    		</li>
		     	</ul>
		    </li>

		    <?php if($_SESSION['Auth']['User']['group_id'] == "1") { ?>
		    <!-- USER MENU -->
		    <li class="dropdown">
		    	<a id="drop1" data-toggle="dropdown" class="dropdown-toggle" href="#">
		    		User
		    	<b class="caret"></b>
		    	</a>
		    	<ul class="dropdown-menu">
		    		<li>
		    			<?php echo $this->Html->link(__('Index User', true), array(
				    		'admin' => FALSE, 
				    		'plugin' => FALSE,
				    		'controller' => 'users', 
				    		'action' => 'index')); 
		    			?>
		    		</li>
		    		<li>
		    			<?php echo $this->Html->link(__('Add User', true), array(
					    	'admin' => FALSE, 'plugin' => FALSE,
					    	'controller' => 'users', 'action' => 'add'));
		    			?>
		    		</li>
		     	</ul>
		    </li>
		    
		  	<!-- CLASSIFICATION MENU -->
		    <li class="dropdown">
		    	<a id="drop1" data-toggle="dropdown" class="dropdown-toggle" href="#">
		    		Classification
		    	<b class="caret"></b>
		    	</a>
		    	<ul class="dropdown-menu">
		    		<li>
		    			<?php echo $this->Html->link(__('Index of classification', true), array(
				    		'admin' => FALSE, 
				    		'plugin' => FALSE,
				    		'controller' => 'classifications', 
				    		'action' => 'index')); 
		    			?>
		    		</li>
		     	</ul>
		    </li>
		    
		    <!-- GROUP MENU -->
		    <li class="dropdown">
		    	<a id="drop1" data-toggle="dropdown" class="dropdown-toggle" href="#">
		    		Group
		    	<b class="caret"></b>
		    	</a>
		    	<ul class="dropdown-menu">
		    		<li>
		    			<?php echo $this->Html->link(__('Index Group', true), array(
				    		'admin' => FALSE, 
				    		'plugin' => FALSE,
				    		'controller' => 'groups', 
				    		'action' => 'index')); 
		    			?>
		    		</li>
		    		<li>
		    			<?php echo $this->Html->link(__('Add Group', true), array(
					    	'admin' => FALSE, 'plugin' => FALSE,
					    	'controller' => 'groups', 'action' => 'add'));
		    			?>
		    		</li>
		     	</ul>
		    </li>
		    <!-- DEPARTMENT MENU -->
		    <li class="dropdown">
		    	<a id="drop1" data-toggle="dropdown" class="dropdown-toggle" href="#">
		    		Department
		    	<b class="caret"></b>
		    	</a>
		    	<ul class="dropdown-menu">
		    		<li>
		    			<?php echo $this->Html->link(__('Index Departments', true), array(
				    		'admin' => FALSE, 
				    		'plugin' => FALSE,
				    		'controller' => 'departments', 
				    		'action' => 'index')); 
		    			?>
		    		</li>
		    		<li>
		    			<?php echo $this->Html->link(__('Add Department', true), array(
					    	'admin' => FALSE, 'plugin' => FALSE,
					    	'controller' => 'departments', 'action' => 'add'));
		    			?>
		    		</li>
		     	</ul>
		    </li>
		    <?php } ?>
		    
		    <li>
		    	<?php 
		    		if($this->name == "Documents" && $this->action == "index") {
		        		echo $this->Html->link(__('Search', true), '#', array('class' => 'search'));
		    		} else {
		    			echo $this->Html->link(__('Search', true), array('controller' => 'documents', 'action' => 'index'));
		    		} 
		       	?>
		    </li>
		  </ul>
		  
		<!-- RIGHT TOP MENU -->		  
		  <ul class="nav navbar-nav pull-right">
		  		<!-- SEARCH BOX
		  		<li>
		  			<form action="" class="navbar-form pull-right">
		              <input type="text" placeholder="Search" class="form-control col-lg-8">
		            </form>
		  		</li>
		  		 -->
		  		
		  		<li class="dropdown">
	                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                	<?php 
	                		if (isset($_SESSION['Auth']['User']['first_name'])){
	                			echo "Welcome, " . ucfirst($_SESSION['Auth']['User']['first_name']);
	                		}
	                	?> 
	                	<b class="caret"></b>
	                </a>
	                <ul class="dropdown-menu">
	                <!-- 
	                  <li>
	                  	<a>My Account</a>
	                  </li>
	                  <li>
	                  	<a href="#">Edit Account</a>
	                  </li>
	                  <li class="divider"></li>
	                  -->
	                  	<li>
	                  		<?php 
	                  			echo $this->Html->link(__('Logout'), array(
	                  			'controller' => 'users',
	                  			'action' => 'logout',
	                  			'admin' => FALSE,
	                  			'plugin' => FALSE));
	                  		?>
						</li>
	                </ul>
	              </li>
		  </ul>
	</div>
</div>
	