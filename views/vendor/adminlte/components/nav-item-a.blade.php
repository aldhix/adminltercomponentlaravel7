@props(['href' => '#','param'=>null,'noParam'=>null])
<?php 
if($noParam){
	$url = request()[$param] ? '' : url()->current();
} else {
	$url = $param ? url()->current().'?'.$param.'='.request()[$param] : url()->current();
}
$active =  $url == $href ? ' active' : ''; 
?>
<li class="nav-item"><a href="<?= $href ?>" {{ $attributes->merge(['class' => 'nav-link'.$active]) }}><?= $slot ?></a></li>