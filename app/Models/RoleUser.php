<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;

    protected $table = 'role_user';

    public $timestamps = false;
    protected $fillable = [
        'role_id', 'admin_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class,'admin_id');
    }
}
