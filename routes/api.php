<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('person',function (Request $request){
	if (!$request->ajax()){
		return "";
	}
	$people = file_get_contents(base_path('database/sample/dummy_data.json'));
	$people = json_decode($people);
	$people = $people->mahasiswa;

	foreach ($people as $data){
		if ($data->id == $request->custom_id){
			return json_encode($data);
		}
	}
	return "";

})->name('api.person');
