<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatans';
    protected $fillable = ['nama_jabatan'];


    public function about()
    {
        return $this->hasMany(about::class, 'id', 'id_jabatan');
    }
}
