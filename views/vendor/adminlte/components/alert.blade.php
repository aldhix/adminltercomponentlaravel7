@props(['close'=>true])
<div {{ $attributes->merge(['class' => 'alert alert-dismissible']) }}>
<?php if ($close): ?>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php endif ?>
<?= $slot ?></div>