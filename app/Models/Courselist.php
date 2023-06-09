<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courselist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsto(Category::class);
    }
    public function teacher()
    {
        return $this->belongsto(Teacher::class);
    }


    public function videos()
    {
        return $this->hasMany(Video::class, 'courselists_id', 'id');
    }
}
