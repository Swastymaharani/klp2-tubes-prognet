<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanStruktural extends Model
{
    use HasFactory;
    protected $table='m_jabatan_strukutral';
    protected $primaryKey='jabatan_id';
    protected $fillable=['nama_jabatan_singkat', 'nama_jabatan_panjang','tipe_jabatan','urut','priority','sks_bkd','poin_skp'];

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
