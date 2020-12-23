<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $primaryKey='id';
    protected $table='blocks';
    protected $fillable=array('title','topicid','content','imagesPath','created_at','updated_at'); 
}
