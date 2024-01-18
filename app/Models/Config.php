<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['component_id', 'config'];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }
    use HasFactory;
}
