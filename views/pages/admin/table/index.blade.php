@extends('admin::dashboard',['title'=>'Table'])
@section('content')
<x-admin::content-header>
	<h1> <i class="fas fa-table"></i> Table Example </h1>
</x-admin::content-header>
<x-admin::content>
	<x-admin::card>
		<x-admin::card-header>
			<h3 class="card-title">Table example</h3>
			<div class="card-tools">
				<form class="form-inline">
					<x-admin::input-group class="input-group-sm">
						<x-admin::input name="search"/>
						<x-admin::append>
							<button class="btn btn-secondary"><i class="fas fa-search"></i></button>
						</x-admin::append>
					</x-admin::input-group>
				</form>
			</div>
		</x-admin::card-header>
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