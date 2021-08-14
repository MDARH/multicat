<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiCat extends Model
{
    use HasFactory;

    protected $table = 'multi_cats';

	public function parent()
	{
		return $this->belongsTo('App\Models\MultiCat', 'parent');
	}

	public function child()
	{
		return $this->belongsTo('App\Models\MultiCat', 'parent', 'id');
	}

    public function sub_cat(){
    	return $this->hasMany('App\Models\MultiCat', 'parent', 'id');
    }

    public function main_cat(){
        return $this->hasMany('App\Models\MultiCat', 'parent', 'id');
    }

	public function multicat()
	{
		if($this->parent) {
			return $this->cat_name ;
		}
	}

}
