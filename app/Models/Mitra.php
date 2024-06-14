<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    
    protected $fillable = ['nomor_unit', 'nama_pemilik', 'nomor_hp', 'provinsi', 'kabupaten', 'kecamatan', 'kelurahan'];
}
