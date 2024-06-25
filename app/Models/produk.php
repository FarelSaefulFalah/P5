<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $fillable = ['nama_produk','gambar', 'harga','deskripsi' ,'id_kategori', 'id_brand'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['nama_produk','gambar', 'harga','deskripsi' ,'id_kategori', 'id_brand'];
    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    // menghapus foto
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/produk/' . $this->foto))) {
            return unlink(public_path('images/produk/' . $this->foto));
        }
    }
}
