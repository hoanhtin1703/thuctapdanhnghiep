<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
   
    use HasFactory;
    public $timestamps = true; //set time to false
    protected $primaryKey = 'id';
 	protected $table = 'tintuc';
}
