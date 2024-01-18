<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo_task extends Model
{
    protected $table ="todo_tasks";
    
    protected $fillable =[
        'tittle',
        'discription',
        'status'
    ];
    use HasFactory;
}
