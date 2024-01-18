<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name'];

    public function components()
    {
        return $this->hasMany(Component::class);
    }
    
    use HasFactory;
}
