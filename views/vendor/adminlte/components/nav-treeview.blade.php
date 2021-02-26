@props(['is' => null])
<?php 
	$open = request()->is($is) ? ' menu-open' : '';
	$active = request()->is($is) ? ' active' : '';
?>
<li {{ $attributes->merge(['class' => 'nav-item has-treeview'.$open]) }}><a href="#" class="nav-link<?= $active?>"><?= $slot ?></a><ul class="nav nav-treeview">		<?= $item ?></ul></li>