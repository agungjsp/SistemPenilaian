<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_mapel extends Model
{
    protected $filetable = ['Kd_Mapel','Nama_Mapel'];
  	protected $guarded = array('_token');
}
