<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LangkahModel extends Model
{
    use HasFactory;

    protected $table = 'langkah';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['resep_id', 'urutan', 'deskripsi'];

    public function resep()
    {
        return $this->belongsTo(ResepModel::class, 'resep_id');
    }
}
