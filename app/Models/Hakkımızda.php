<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hakkımızda extends Model
{
    use HasFactory;
    protected $table = 'hakkimizda';

    protected $fillable = ['hakkimizdaicerik', 'hakkimizdakisayazi'];
}
