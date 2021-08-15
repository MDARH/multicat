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
		return $this->belongsTo('App\Models\MultiCat', 'id', 'parent');
	}

    public function sub_cats()
    {
    	return $this->hasMany(MultiCat::class, 'parent');
    }

	public function multicat()
	{
		if($this->sub_cats) {
			return MultiCat::where('parent', '') . ' > ' . 'Parent' ;
		}else{
            return 'parent > parent cat';
        }
	}

}
