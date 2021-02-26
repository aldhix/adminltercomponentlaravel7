@extends('admin::dashboard',['title'=>'User'])
@section('content')
<x-admin::content-header>
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><i class="fas fa-users"></i> User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </div>
    </div>
</x-admin::content-header>
@endsection