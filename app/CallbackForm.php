<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallbackForm extends Model
{
    public $fillable  = ['email','name','surname'];
}
