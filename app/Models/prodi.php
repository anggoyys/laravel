<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';

    protected $fillable = [
        'nama_prodi',
        'nama_kaprodi',
        'alias_prodi',
    ];
}
