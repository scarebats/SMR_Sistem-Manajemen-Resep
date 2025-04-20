<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanModel extends Model
{
    use HasFactory;

    protected $table = 'bahan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['resep_id', 'nama_bahan', 'jumlah'];

    public function resep()
    {
        return $this->belongsTo(ResepModel::class, 'resep_id');
    }
}
