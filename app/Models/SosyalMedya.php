<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosyalMedya extends Model
{
    use HasFactory;
    protected $table = 'sosyalmedya';

    protected $fillable = ['facebook', 'instagram', 'behance', 'twitter', 'github', 'pinterest'];
    protected $attributes = [
        'facebook' => null,
        'instagram' => null,
        'behance' => null,
        'twitter' => null,
        'github' => null,
        'pinterest' => null,
    ];
}
