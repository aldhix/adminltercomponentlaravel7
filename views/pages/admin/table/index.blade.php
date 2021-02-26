@extends('admin::dashboard',['title'=>'Table'])
@section('content')
<x-admin::content-header>
	<h1> <i class="fas fa-table"></i> Table Example </h1>
</x-admin::content-header>
<x-admin::content>
	<x-admin::card class="card-primay">
		<x-admin::card-body class="p-0">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama</th><th>Email</th><th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Maman</td><td>maman@gmail.com</td><td></td>
					</tr>
				</tbody>
			</table>
		</x-admin::card-body>
	</x-admin::card>
</x-admin::content>
@endsection