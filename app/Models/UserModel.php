<?php

namespace App\Models;

use Illuminate\Support\Str;
class UserModel extends Model
{
 use HasFactory;
 protected $table = 'users';
 protected $primaryKey = 'id';
 protected $fillable = [
 'firstname',
 'lastname',
 'username',
 'email',
 'password',
 ];
 protected function casts(): array {
 return array(
 'id' => 'string',
 'password' => 'hashed',
 );
 }
 protected static function boot() {
 parent::boot();
 static::creating(function ($user) {
 $user->id = Str::uuid();
 });
 }
}
