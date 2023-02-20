<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Friend_order extends Model
{
    use HasFactory;
    protected $fillable=['friends','order_id'];
    protected $table="friend_order";
    public function orders(){

        return $this->belongsToMany(Order::class);
    }
    }

