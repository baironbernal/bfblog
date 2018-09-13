<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    
	protected $table = "comments_replies";

    public function comment()
    {
        return $this->belongsTo('App\Models\Commentary');
    }
}
