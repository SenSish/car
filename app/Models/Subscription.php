<?php

namespace App\Models;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function invoice()
    {
    return $this->hasmany(Invoice::class);
    }

    public function counter()
    {
    return $this->belongsTo(Counter::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
