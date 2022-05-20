<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_marca',
        'formula',
        'validade',
        'lote',
        'nome_remedio',
        'valor',
        'user_id'
    ];

    public function donoDoRemedio() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

