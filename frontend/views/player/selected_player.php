<?php 

use yii\helpers\Html;

?>

<div class="well" align="center">
	<div class="row">
		<h3><?php echo $user->username; ?> have selected</h3>
		<img src=<?php $imgurl ='"'; $imgurl .= $model->p_image; $imgurl .= '"'; echo $imgurl; ?> class="img-thumbnail">
		<h1>
			<?php
				echo $model->p_name;
			?>
		</h1>
	</div>
</div>



