<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table ='info_table';
    public $timestamps = true;
    protected $fillable = ['kategori','judul','deskripsi','foto'];
}
