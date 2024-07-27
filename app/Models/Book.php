<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'id_kategori', 'penulis', 'deskripsi', 'image'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori');
    }
}
