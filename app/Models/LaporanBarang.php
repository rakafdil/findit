<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaporanBarang extends Model
{
    use HasFactory; 
    protected $table = 'laporan_barang';
    protected $primaryKey = 'laporan_id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'jenis_laporan',
        'nama_barang',
        'deskripsi',
        'lokasi',
        'tanggal_kejadian',
        'tanggal_penyelesaian',
        'status_laporan',
        'img_path'
    ];

    protected $casts = [
        'tanggal_kejadian' => 'date',
        'tanggal_penyelesaian' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}