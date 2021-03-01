<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'title', 'category_id', 'author', 'subcontent','image', 'caption','content', 'publishdate', 'status', 'language_id'];

    public function category()
   	{
   		return $this->belongsTo('App\Models\Category');
   	}
   	public function language()
   	{
   		return $this->belongsTo('App\Models\Language');
   	}
   
}
