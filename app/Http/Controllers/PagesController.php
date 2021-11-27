<?php

namespace App\Http\Controllers;

/* Routes examples
Route::get('pages/search', 'App\Http\Controllers\PagesController@search');
Route::get('pages/find/{id}','App\Http\Controllers\PagesController@find');
Route::post('pages/save', 'App\Http\Controllers\PagesController@save');
Route::post('pages/valid', 'App\Http\Controllers\PagesController@valid');
Route::post('pages/remove', 'App\Http\Controllers\PagesController@remove');
Route::get('pages/clone/{id}','App\Http\Controllers\PagesController@clone');
Route::get('pages/export', 'App\Http\Controllers\PagesController@export');
*/

class PagesController extends Controller
{

	public function __construct() {
		$this->middleware('auth:api', [
			'except' => [],
		]);
	}

	public function search() {
		return \App\Models\Pages::search()->paginate(request('per_page', 10));
	}

	public function find($id) {
		return \App\Models\Pages::find($id);
	}

	public function save() {
		return (new \App\Models\Pages)->store(request()->all());
	}

	public function valid() {
		return \App\Models\Pages::new()->validate(request()->all());
	}

	public function remove($id) {
		return \App\Models\Pages::search()->remove();
	}

	public function clone($id) {
		return \App\Models\Pages::find($id)->clone();
	}

	public function export() {
		return \App\Models\Pages::search()->export(export('format', 'csv'));
	}
}