<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable  implements  JWTSubject
{
	use Notifiable;
    protected $table = 'usuarios';

    protected $fillable = ['name','surname','email','password'];
    protected $hidden = ['password'];

    public function getJWTIdentifier(){
    	return $this->getKey();
    }

    public  function  getJWTCustomClaims() {
		return [];
	}
}
