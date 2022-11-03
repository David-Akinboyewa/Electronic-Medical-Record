<?php if (count($errors) > 0): ?>
	<div class="error">
		<?php foreach ($errors as $error): ?> 
			<p><?php echo $error;?></p>
		<?php endforeach?>
	</div>
<?php endif ?>

<style type="text/css">
	.error{
		width: 92%;
		margin: 0px auto;
		padding: 10px;
		border: 1px solid #ff0099;
		color: red;
		background: white;
		border-radius: 5px;
		text-align: left;
		line-height: 20px;
		font-weight: bold;
		margin-bottom: 5px;
	}

</style>
