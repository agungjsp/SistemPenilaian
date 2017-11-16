<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_siswa extends Model
{
    protected $filetable = ['nis','nama','ttl'];
  	protected $guarded = array('_token');
}
