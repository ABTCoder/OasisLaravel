<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
	
	protected $table = 'utente';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cognome', 'username', 'email', 'password', 'data_nasc', 'occupazione', 'residenza', 'privilegio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'username', 'remember_token',
    ];
	
	protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function hasRole($privilegio) {
        $privilegio = (array)$privilegio;
        return in_array($this->privilegio, $privilegio);
    }
}
