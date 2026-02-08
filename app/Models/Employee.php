<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['org_id','name','designation','phone'];

	protected static function booted()
	{
		static::addGlobalScope('org', function ($query) {
			if (auth()->check() && auth()->user()->role !== 'super_admin') {
				$query->where('org_id', auth()->user()->org_id);
			}
		});
	}
}

