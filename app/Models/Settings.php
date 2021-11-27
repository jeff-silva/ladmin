<?php

namespace App\Models;

class Settings extends \Illuminate\Database\Eloquent\Model
{
	use \App\Traits\Model;

	protected $fillable = [
		'id',
		'name',
		'value',
		'model',
		'created_at',
		'updated_at'
	];

	public function validate($data=[]) {
		return \Validator::make($data, [
			'name' => ['required'],
		]);
	}

	public function saveAll($data=[]) {
		$return = [];
		foreach($data as $name=>$value) {
			$value = is_array($value)? json_encode($value): $value;
			$this->firstOrNew(['name' => $name])->fill(['value' => $value])->save();
			$return[ $name ] = $value;
		}
		return $return;
	}

	public function getAll() {
		$settings = self::select(['name', 'value'])->get()->pluck('value', 'name')->toArray();
		foreach($settings as $key=>$val) {
			if ($val[0]=='{' OR $val[0]=='[') {
				$val = json_decode($val, true);
				if (is_array($val)) {
					$settings[ $key ] = $val;
				}
			}
		}
		return (object) $settings;
	}
}