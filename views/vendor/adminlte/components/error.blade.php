@props(['name','class'=>'invalid-feedback', 'outside'=>false])
<?php if($errors->has($name)):?>
<?php 
if($outside){
	$class = 'text-danger';
	$style = 'style="font-size:80%; margin-top:.25rem; width:100%" ';
} else {
	$class = 'invalid-feedback';
	$style = "";
}
?>
<div class="<?= $class ?>" <?= $style ?>{{ $attributes }}>{{ $errors->first($name) }}</div>
<?php endif ?>