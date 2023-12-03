<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='personas';
    protected $fillable=['rol','admistradors_id','trabajadors_id'];
}
