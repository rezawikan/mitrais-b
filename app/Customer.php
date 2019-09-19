<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'email',
      'phone',
      'first_name',
      'last_name',
      'gender',
      'date'
    ];
}
