<x-admin::nav-treeview is="user*">
	<i class="nav-icon fas fa-users"></i>
	<p>User <i class="right fas fa-angle-left"></i></p>
	<x-slot name="item">
		<x-admin::nav-item-a>
			<i class="nav-icon far fa-circle"></i>
		  	<p>All</p>
		</x-admin::nav-item-a>
		<x-admin::nav-item-a>
			<i class="nav-icon far fa-circle"></i>
		  	<p>Create</p>
		</x-admin::nav-item-a>
	</x-slot>
</x-admin::nav-treeview>