<?php if(count($errors) > 0) : ?>

	<div class="error" style="color: red;">

		<?php foreach($errors as $error) : ?>

			 <label> <?php echo $error; ?></lebel>

		<?php endforeach	?>
    </div>
 <?php endif ?>