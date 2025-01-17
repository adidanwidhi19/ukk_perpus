<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo( related: User::class);
    }
    public function buku()
    {
        return $this->belongsTo( related: Buku::class);
    }
}
