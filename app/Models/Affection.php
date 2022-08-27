<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affection extends Model
{
    use HasFactory;

    protected $fillable = [
        'package',
        'ecosystem',
        'introduced',
        'fixed',
    ];

    public function vulnerability()
    {
        return $this->belongsTo(Vulnerability::class);
    }
}
