@extends('admin::dashboard',['title'=>'Dahboard'])
@section('content')
<x-admin::content-header>
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Blank Page</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
</x-admin::content-header>

<x-admin::content>
  <x-admin::row>
      <x-admin::col class="col-lg-3 col-6">
          <x-admin::small-box class="bg-info">
              <x-admin::small-box-inner>
                <h3>150</h3>
                <p>New Orders</p>
              </x-admin::small-box-inner>
              <x-admin::small-box-icon>
                <i class="ion ion-bag"></i>
              </x-admin::small-box-icon>
              <x-admin::small-box-footer href="#">More info</x-admin::small-box-footer>
          </x-admin::small-box>
      </x-admin::col>
      <x-admin::col class="col-lg-3 col-6">
          <x-admin::small-box class="bg-success">
              <x-admin::small-box-inner>
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Bounce Rate</p>
              </x-admin::small-box-inner>
              <x-admin::small-box-icon>
                <i class="ion ion-stats-bars"></i>
              </x-admin::small-box-icon>
              <x-admin::small-box-footer href="#">More info</x-admin::small-box-footer>
          </x-admin::small-box>
      </x-admin::col>
      <x-admin::col class="col-lg-3 col-6">
          <x-admin::small-box class="bg-warning">
              <x-admin::small-box-inner>
                <h3>44</h3>
                <p>User Registrations</p>
              </x-admin::small-box-inner>
              <x-admin::small-box-icon>
                <i class="ion ion-person-add"></i>
              </x-admin::small-box-icon>
              <x-admin::small-box-footer href="#">More info</x-admin::small-box-footer>
          </x-admin::small-box>
      </x-admin::col>
      <x-admin::col class="col-lg-3 col-6">
          <x-admin::small-box class="bg-danger">
              <x-admin::small-box-inner>
                <h3>65</h3>
                <p>Unique Visitors</p>
              </x-admin::small-box-inner>
              <x-admin::small-box-icon>
                <i class="ion ion-pie-graph"></i>
              </x-admin::small-box-icon>
              <x-admin::small-box-footer href="#">More info</x-admin::small-box-footer>
          </x-admin::small-box>
      </x-admin::col>
  </x-admin::row>
</x-admin::content>
@endsection