<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Region;
use App\Models\Counter;
use App\Models\Invoice;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'phone',
        'type',
        'email',
        'birthday',
        'region_id',
        'password',
        'identification_no'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
        public function region()
        {
            return $this->belongsTo(Region::class);
        }

        public function invoice()
        {
        return $this->hasmany(Invoice::class,);
        }

        public function counter()
        {
        return $this->hasmany(Counter::class,);
        }
    }
