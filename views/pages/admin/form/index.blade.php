@extends('admin::dashboard',['title'=>'Form'])
@section('content')
<x-admin::content-header>
	<h1> <i class="fas fa-edit"></i> Form </h1>
</x-admin::content-header>
<x-admin::content>
	<x-admin::row>
		<x-admin::col class="col-4">
			<form action="{{ route('admin.form') }}" method="post">
				<x-admin::card class="card-primary">
					
					<x-admin::card-header>
							<h3 class="card-title">Form Components</h3>
					</x-admin::card-header>
					
					<x-admin::card-body>
							
							<x-admin::form-group>
								<x-admin::input-group>
									<x-admin::prepend>
										<span class="input-group-text">Nama Lengkap</span>
									</x-admin::prepend>
									<x-admin::input name="nama" />
									<x-admin::append>
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</x-admin::append>
								</x-admin::input-group>
								<x-admin::error name="nama" outside="true" />
							</x-admin::form-group>

							<x-admin::form-group class="row">
								<label class="col-4 col-form-label">Email</label>
								<x-admin::col>
									<x-admin::input name="email" />
									<x-admin::error name="email" />
								</x-admin::col>								
							</x-admin::form-group>
							
							<x-admin::form-group class="row">
								<label class="col-4 col-form-label"><span class="align-middle">Jenis Kelamin</span></label>
								<x-admin::col>
									<x-admin::select name="gender" 
									 :options="[ ['value'=>'L','option'=>'Laki-Laki'],['value'=>'P','option'=>'Perempuan'] ]">
										<option value="">Pilih : </option>
									</x-admin::select>
									<x-admin::error name="gender" />
								</x-admin::col>
							</x-admin::form-group>

							<x-admin::form-group>
								<label>Alamat Lengkap</label>
								<x-admin::textarea name="alamat"></x-admin::textarea>
								<x-admin::error name="alamat" />
							</x-admin::form-group>

					</x-admin::card-body>
					<x-admin::card-footer>
							<button type="submit" class="btn btn-default">Submit</button>
					</x-admin::card-footer>
				
				</x-admin::card>
			</form>
		</x-admin::col>
	</x-admin::row>
</x-admin::content>
@endsection