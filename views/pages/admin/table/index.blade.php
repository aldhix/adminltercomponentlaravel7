@extends('admin::dashboard',['title'=>'Table'])
@section('content')
<x-admin::content-header>
	<h1> <i class="fas fa-table"></i> Table Example </h1>
</x-admin::content-header>
<x-admin::content>
	<x-admin::alert class="alert-success">
		<h5><i class="icon fas fa-check"></i> Alert!</h5>
        Success alert preview. This alert is dismissable.
	</x-admin::alert>
	<x-admin::alert class="alert-warning" :close="false">
		<h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
         Warning alert preview. This alert isn't dismissable.
	</x-admin::alert>
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
					<tr>
						<td>Andovi</td><td>andovi@gmail.com</td><td></td>
					</tr>
				</tbody>
			</table>
		</x-admin::card-body>
		<x-admin::card-footer class="clearfix">
			<ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
		</x-admin::card-footer>
	</x-admin::card>
</x-admin::content>
@endsection