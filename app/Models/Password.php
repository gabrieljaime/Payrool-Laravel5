<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Password extends Model {

    public $timestamps = true;
    protected $table = 'password_resets';
}