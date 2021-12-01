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
		$email = config('jira.email');
		$api_base = "{$domain}/rest/api/latest";
		$api_url = "{$api_base}/{$path}". ($method=='get'? ('?'.http_build_query($params)): null);

		return \Cache::remember($api_url, 60*5, function() use($email, $access_token, $method, $api_url) {
			$resp = (new \GuzzleHttp\Client(['auth' => [$email, $access_token]]))->request(strtoupper($method), $api_url)->getBody()->getContents();
			$resp = json_decode($resp, true);
			return is_array($resp)? $resp: ['error' => 'empty'];
		});
	}

	static function jql($jql) {
		return self::api('get', '/search', [
			'jql' => $jql,
		]);
	}
}