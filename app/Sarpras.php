<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarpras extends Model
{
    protected $table ='sarpras';
    public $timestamps = false;
    protected $fillable = ['nama','deskripsi','foto'];
}
