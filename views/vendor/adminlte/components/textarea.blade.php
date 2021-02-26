@props(['name'=>null])
<?php $attr_name = $name ? ' name='.$name:'';
	  if($name){
	  	$old = request()->old($name, $slot);
	  	$slot = $old ? $old : '' ;
	  }
	  $is_invalid = $errors->has($name) && $name ? ' is-invalid':'';
?>
<textarea {{ $attributes->merge(['class' => 'form-control'.$is_invalid]) }}{{ $attr_name }}><?= $slot ?></textarea>