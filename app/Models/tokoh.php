<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokoh extends Model
{
    use HasFactory;

    protected $table = 'tokohs';
    protected $fillable = ['nama', 'tittle', 'deskripsi', 'image'];
}
