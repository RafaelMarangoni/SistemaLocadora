<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
   protected $table = "categoria";
   protected $primarykey = "categoria_id";
   public $timestemps = false; 
}


