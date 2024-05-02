<?php

// Barang.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_barang_id');
    }
}
