

<?php
echo $this->Html->css(array('loginstyle'));
echo $this->Html->script(array('modernizr.custom.63321.js'));
?>
<script>
		$(function() {
			$.backstretch([
	      				"/img/bg1.jpg"
	  					], {duration: 5000, fade: 750});
		});
</script> 
<div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#">
                    <strong>Structure Health Management</strong>
                </a>
                <span class="right">
                	
                </span>
            </div><!--/ Codrops top bar -->
			
			<header>
				<h1><?php echo __('Structure Health Management Login Form'.$this->Session->flash()); ?></h1>
				
				
			</header>
			<section class="main">
				<div class="users form">


			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('username');
        	echo $this->Form->input('password');
 			?>
    
			<?php echo $this->Form->end(__('Login')); ?>
			</div>
</section>
			
					
  </div>
