<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Visor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'visores';
    protected $fillable = ['ip', 'name'];

}
