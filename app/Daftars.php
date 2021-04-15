<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftars extends Model
{
     protected $table 	  = 'daftars';
    protected $fillable   = ['name','jk','temp_lahir','tgl_lahir','alamat','asal_sekolah','kelas','jurusan'];
    protected $primaryKey = 'id';
}
