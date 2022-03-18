<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profils';

    protected $fillable = [
        'judul', 'isi_judul', 'image_1', 'image_2', 'image_3', 'visi', 'isi_visi', 'misi', 'isi_misi'
    ];
}
