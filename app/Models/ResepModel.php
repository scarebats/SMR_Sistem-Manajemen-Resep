<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepModel extends Model
{
    use HasFactory;

    protected $table = 'resep';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['judul', 'deskripsi'];

    public function bahan()
    {
        return $this->hasMany(BahanModel::class, 'resep_id');
    }

    public function langkah()
    {
        return $this->hasMany(LangkahModel::class, 'resep_id')->orderBy('urutan');
    }
}
