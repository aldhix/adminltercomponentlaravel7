@props(['name'=>null,'value'=>null,'options'=>[]])
<?php $attr_name = $name ? ' name='.$name:'';
	  if($name){
	  	$old = request()->old($name, $value);
	  	$value = $old ? $old : '';
	  }
	  $value = $value ? $value : '';
	  $is_invalid = $errors->has($name) && $name ? ' is-invalid':'';
?>
<select {{ $attributes->merge(['class' => 'form-control'.$is_invalid]) }}{{ $attr_name }}>
	<?= $slot ?>
	<?php foreach ($options as $key => $option): ?>
		<?php if ($option['value'] == $value): ?>
			<option value="<?= $option['value']?>" selected><?= $option['option']?></option>
		<?php else: ?>
			<option value="<?= $option['value']?>"><?= $option['option']?></option>
		<?php endif ?>
	<?php endforeach ?>
</select>