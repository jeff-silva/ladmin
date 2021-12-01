<?php

namespace App\Http\Controllers;

/* Routes examples
Route::get('jira/search', 'App\Http\Controllers\JiraController@search');
Route::get('jira/find/{id}','App\Http\Controllers\JiraController@find');
Route::post('jira/save', 'App\Http\Controllers\JiraController@save');
Route::post('jira/valid', 'App\Http\Controllers\JiraController@valid');
Route::post('jira/remove', 'App\Http\Controllers\JiraController@remove');
Route::get('jira/clone/{id}','App\Http\Controllers\JiraController@clone');
Route::get('jira/export', 'App\Http\Controllers\JiraController@export');
*/

class JiraController extends Controller
{
	static function router() {
		\Route::get('jira/users', 'App\Http\Controllers\JiraController@users');
		\Route::get('jira/issues', 'App\Http\Controllers\JiraController@issues');
	}

	public function __construct() {
		$this->middleware('auth:api', [
			'except' => ['test'],
		]);
	}

	public function users() {
		return \App\Models\Jira::api('get', '/users/search');
	}

	public function issues() {
		$accountId = request('accountId');
		return \App\Models\Jira::jql("project = 'UND' AND assignee = '{$accountId}' AND created >= '2021-11-01' AND created <= '2021-11-30' ORDER BY created DESC");
	}

	public function search() {
		return \App\Models\Jira::search()->paginate(request('per_page', 10));
	}

	public function find($id) {
		return \App\Models\Jira::find($id);
	}

	public function save() {
		return (new \App\Models\Jira)->store(request()->all());
	}

	public function valid() {
		return \App\Models\Jira::new()->validate(request()->all());
	}

	public function remove($id) {
		return \App\Models\Jira::search()->remove();
	}

	public function clone($id) {
		return \App\Models\Jira::find($id)->clone();
	}

	public function export() {
		return \App\Models\Jira::search()->export(export('format', 'csv'));
	}
}