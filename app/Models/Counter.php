<?php

namespace App\Models;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Counter extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongto(User::class,'id');
    }

    public function subscription()
    {
        return $this->hasmany(Subscription::class);
    }

}
