<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['page_id', 'position', 'type', 'pinned'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function details()
    {
        return $this->hasMany(Config::class);
    }
    use HasFactory;
}
