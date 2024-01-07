<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iletisim extends Model
{
    protected $fillable = ['harita_iframe', 'telnumara', 'adres']; // Diğer alanlar

    use HasFactory;
}
