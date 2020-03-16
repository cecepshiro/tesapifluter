<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table='biodata';
    protected $primaryKey='id';
    public $incrementing =true;
    public $timestamps=true; 
    protected $fillable = [
      'id','user_id','divisi','alamat','sosial_media','foto','created_at','updated_at',
    ];
}
