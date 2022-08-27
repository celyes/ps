<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    use HasFactory;

    protected $fillable = ['code'];

    protected $table = 'aliases';

    public function vulnerability()
    {
        return $this->belongsTo(Vulnerability::class);
    }
}
