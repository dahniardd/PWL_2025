<?php
 
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
 class DetailPenjualanModel extends Model
 {
     protected $table = 't_penjualan_detail';
 
     protected $fillable = [
         'penjualan_id',
         'barang_id',
         'harga',
         'jumlah',
     ];
 
     public $timestamps = false;
 
     public function penjualan()
     {
         return $this->belongsTo(PenjualanModel::class, 'penjualan_id', 'penjualan_id');
     }
 
     public function barang()
     {
         return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
     }

     // untuk menampilkan subtotal 
    public function getSubtotalAttribute()
    {
        return $this->harga * $this->jumlah;
    }
 }