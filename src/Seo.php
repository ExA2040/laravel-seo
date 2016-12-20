<?php

namespace ExA2040\LaravelSEO;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model {

  protected $table = 'seos';
  protected $fillable = array('class_name', 'object_id');

}
