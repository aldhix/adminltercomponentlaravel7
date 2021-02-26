# AdminLTE Component Laravel 7
Component Template AdminLTE Laravel 7

## Setting
Download template AdminLTE v3.0.5 (https://adminlte.io), buat folder **'adminlte'** untuk menyimpan dist dan plugins AdminLTE tersebut. 

edit file app\Providers\AppServiceProvider.php, tambahkan perintah pada method boot :
```sh
public function boot()
{
    $this->loadViewsFrom(resource_path('views/vendor/adminlte'), 'admin');
}
```
