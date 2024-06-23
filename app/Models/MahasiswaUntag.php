<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaUntag extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_untags';  // Sesuaikan dengan nama tabel di database
    protected $fillable = ['nbi', 'nama', 'angkatan'];
    
}
