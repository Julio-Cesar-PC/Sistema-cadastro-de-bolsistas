<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolsista extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, $filters)
    {
        $query->when($filters['busca'] ?? false, fn($query, $busca) => $query->where(fn($query) =>
            $query->where('nome', 'like', "%{$busca}%")
                ->orWhere('cpf', 'like', "%{$busca}%")
                ->orWhere('email', 'like', "%{$busca}%")
        ));

        $query->when($filters['ativo'] ?? false, fn($query, $ativo) => $query->where('ativo', $ativo));
    }
}
