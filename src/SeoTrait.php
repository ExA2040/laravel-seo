<?php

namespace ExA2040\LaravelSEO;

trait SeoTrait {
  
  public function seo()
  {
    return $this->hasOne('\ExA2040\LaravelViewCounter\Counter', 'object_id')->where('class_name', snake_case(get_class($this)));
  }

  public function get_seo()
  {
    $class_name = snake_case(get_class($this));
    return \ExA2040\LaravelSEO\Seo::firstOrCreate(array('class_name' => $class_name, 'object_id' => $this->id));
  }

}
