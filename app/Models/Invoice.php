<?php

namespace App\Models;

use App\Models\User;
use App\Models\Counter;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
    return $this->belongsTo(User::class,'user_id','id');
    }

    public function subscription()
    {
    return $this->belongsTo(Subscription::class,'sub_id');
    }


}
