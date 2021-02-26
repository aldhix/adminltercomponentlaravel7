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

Untuk contoh pada file route gunakan perintah ini :
```sh
Route::group(['prefix' => 'admin'], function() {
    Route::view('/','pages.admin.dashboard.index')->name('admin.dashboard');
	Route::view('/table','pages.admin.table.index')->name('admin.table');
	Route::view('/form','pages.admin.form.index')->name('admin.form');
	Route::post('/form', function(Illuminate\Http\Request $request) {
	    $request->validate([
	    		'nama'=>'required|min:8',
	    		'email'=>'required|email',
	    		'gender'=>'required',
	    		'alamat'=>'required|min:8',
	    	]);
	    return 'Request done';
	});
});
```
