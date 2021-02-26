@props(['href' => '#'])
<?php $active = url()->current() == $href ? ' active' : ''; ?>
<li class="nav-item"><a href="<?= $href ?>" {{ $attributes->merge(['class' => 'nav-link'.$active]) }}><?= $slot ?></a></li>