<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;
    protected $fillable = ['id_tentang', 'no_wa', 'alamat', 'instagram', 'email', 'telp'];
}
