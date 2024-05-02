<?php

// Satuan.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    public function barang()
    {
        return $this->hasMany(Barang::class, 'satuan_barang_id');
    }
}
