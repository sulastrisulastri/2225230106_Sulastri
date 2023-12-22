<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $table = 'pelajar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_identitas',
        'nama',
        'kelas',
        'jenis_kelamin',
        'umur',
        'hobi',
        'alamat'
    ];
}