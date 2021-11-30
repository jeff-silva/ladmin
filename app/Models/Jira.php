<?php

namespace App\Models;

class Jira extends \Illuminate\Database\Eloquent\Model
{
	use \App\Traits\Model;

	protected $fillable = [
		'id',
		'created_at',
		'updated_at',
		'deleted_at'
	];

	public function validate($data=[]) {
		return \Validator::make($data, [
			'name' => ['required'],
		]);
	}

	static function api($method='get', $path='/', $params=[]) {
		$method = strtolower($method);
		$path = trim($path, '/');
		$access_token = config('jira.access_token');
		$domain = rtrim(config('jira.domain'), '/');
		$api_base = "{$domain}/rest/api/latest";
		$api_url = "{$api_base}/{$path}". ($method=='get'? ('?'.http_build_query($params)): null);

		$headers = [
			'Accept: application/json',
			'Content-Type: application/json',
			CURLOPT_USERPWD => ("jeferson.siqueira@listradigital.com.br:{$access_token}"),
		];

		$resp = call_user_func_array(['Http', $method], [$api_url])->json();
		dd($resp);

		dd($access_token, $domain, $api_base, $method, $api_url, $params);
	}

	static function jql($jql) {
		return self::api('get', '/search', [
			'jql' => $jql,
		]);
	}
}