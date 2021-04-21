<?php  if (count($error_login) > 0) : ?>
  <div class="error">
  	<div class="cs-alert alert alert-danger alert-dismissible fade show" role="alert">
	  	<?php foreach ($error_login as $err) : ?>

	               <?php echo "&rarr; " . $err . "<br />" ?>    
	  	 
	  	<?php endforeach ?>
     </div> <!-- ./ cs-alert -->
  </div> <!-- ./ error -->

<?php  endif ?>