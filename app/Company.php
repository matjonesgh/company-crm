<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'website',
    ];

     /**
     * Get the employee details
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
