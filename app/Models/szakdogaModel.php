<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szakdogaModel extends Model
{
    use HasFactory;

    protected $table = 'szakdoga';
    protected $primaryKey = 'id';
   

    protected $fillable = [
        'id',
        'szakdoga_nev',
        'githublink',
        'oldallink',
        'tagokneve',
        'created_at',
        'updated_at'
    ];
}
