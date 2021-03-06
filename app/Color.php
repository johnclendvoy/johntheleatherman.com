<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name', 'hexcode', 'slug'];

    public function leathers()
    {
    	return $this->hasMany('App\Leather', 'color_id')->where('active', 1)->orderBy('id', 'desc');
    }
    public function swatch()
    {
   		return '<span class="color-swatch" style="background-color:' . $this->hexcode . '"></span>';
    }
}
