<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable=['user_id','category_id','title','slug','description','status','image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
