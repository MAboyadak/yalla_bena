<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UserGroup;

class Group extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    // public function user_groups(){
    //     return $this->belongsToMany(UserGroup::class);
    // }

}
