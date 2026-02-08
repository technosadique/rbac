<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'org_id','lead_name','company','phone','status'
    ];

    protected static function booted()
    {
        static::addGlobalScope('org', function ($query) {
            if (auth()->check() && !auth()->user()->isSuperAdmin()) {
                $query->where('org_id', auth()->user()->org_id);
            }
        });
    }
}

