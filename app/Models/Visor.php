<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visor extends Model
{
    use HasFactory;
    protected $table = 'visores';
    protected $fillable = ['ip', 'name'];

}
