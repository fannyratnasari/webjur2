<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birokrasi extends Model
{
    protected $table ='birokrasi';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $fillable = ['jabatan','nama','nip','foto','nohp'];
}