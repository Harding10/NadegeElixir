<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        use HasFactory;

    public function Articles(){

    return $this ->hasMany(article::class);
    }
    
    protected $fillable = ['name'];
    protected $guarded = ['id'];
}
