<?php

namespace App\test;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name','password'];

    public $timestamps = false;
}
