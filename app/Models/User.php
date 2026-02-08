<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = [
        'name','email','password','role','org_id'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'org_id');
    }

    public function isSuperAdmin()
    {
        return $this->role === 'super_admin';
    }
	
	protected static function booted()
	{
		static::creating(function ($user) {
			if ($user->role !== 'super_admin' && !$user->org_id) {
				throw new \Exception('Organization user must have org_id');
			}
		});
	}
}
