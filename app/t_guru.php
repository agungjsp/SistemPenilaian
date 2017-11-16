<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_guru extends Model
{
  protected $filetable = ['nip','nama','ttl'];
  protected $guarded = array('_token');

}
