<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birokrasi extends Model
{
    protected $table ='birokrasi_table';
    public $timestamps = false;
    protected $fillable = ['jabatan','nama','nip','foto','nohp'];
}
