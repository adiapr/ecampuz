<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\InstansiController;

class Instansi extends Model
{
    use HasFactory;

    protected $table = 'table_instansi';

    protected $fillable = [
        'instansi',
        'deskripsi',
    ];
}
