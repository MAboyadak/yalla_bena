<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\Models\User;

class UserGroup extends Model
{
    use HasFactory;

    // public function groups(){
    //     return $this->hasMany(Group::class,'id');
    // }

    // public function users(){
    //     return $this->hasMany(User::class,'id');
    // }
}
