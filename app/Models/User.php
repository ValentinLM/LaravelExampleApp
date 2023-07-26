<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function getNameAttribute($value) {
        return ucwords($value);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtolower($value);
    }
    /*Sólo apartir de laravel 9.X
    protected function name(): Attribute
    {
        return new Attribute(
            //Accesores transforman las palabras cuando los regresa pero no cambian en la DB
            get: fn($value) => ucwords($value),//Es mejor esta

            //Mutacion transforma las palabras antes de guardarlas
            set: function($value) {
                return strtolower($value);
            }
        );

    }
    */

}
