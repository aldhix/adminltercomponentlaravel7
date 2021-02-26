@extends('admin::dashboard',['title'=>'Tab Example'])
@section('content')
<x-admin::content-header>
	<h1>Tab Example</h1>
</x-admin::content-header>
<x-admin::content>
	<x-admin::card class="card-tabs card-primary">
		<x-admin::card-header class="p-0 pt-1">
			<ul class="nav nav-tabs">
				<x-admin::nav-item-a :href="route('admin.tab')" no-param="tab" >
					Home
				</x-admin::nav-item-a>
				<x-admin::nav-item-a :href="route('admin.tab', ['tab'=>'profile'])" param="tab">
					Profile
				</x-admin::nav-item-a>
				<x-admin::nav-item-a :href="route('admin.tab', ['tab'=>'settings'])" param="tab">
					Settings
				</x-admin::nav-item-a>
			</ul>
		</x-admin::card-header>
		<x-admin::card-body>
			{{ request()->tab ?? 'Home' }}
		</x-admin::card-body>
	</x-admin::card>
</x-admin::content>
@endsection