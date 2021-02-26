@props(['type'=>'text','name'=>null,'value'=>null])
<?php $attr_name = $name ? ' name='.$name:'';
	  if($name){
	  	$old = request()->old($name, $value);
	  	$value = $old ? $old : '' ;
	  }
	  $attr_value = $value ? ' value='.$value.' ':''; 
	  $is_invalid = $errors->has($name) && $name ? ' is-invalid':'';
?>
<input type="<?= $type ?>" {{ $attributes->merge(['class' => 'form-control'.$is_invalid]) }}{{ $attr_name }}{{ $attr_value }}>