<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFungsional extends Model
{
    use HasFactory;
    protected $table = 'm_jabatan_fungsional';
    protected $primaryKey = 'jabatan_fungsional_id';
    protected $fillable = ['jabatan_kum'];

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
