<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table ='info';
    public $timestamps = false;
    protected $fillable = ['kategori','judul','deskripsi','foto'];
}
