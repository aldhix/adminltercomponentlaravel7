@props(['href'=>'#'])
<?php $active = url()->current() == $href ? ' active' : ''; ?>
<a href="<?= $href ?>" {{ $attributes->merge(['class' => 'dropdown-item'.$active]) }}><?= $slot ?></a>