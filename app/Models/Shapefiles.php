<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shapefiles extends Model
{
    protected $table = 'shapefiles';
    use HasFactory;

    protected $fillable = [
        'id',
        'emb_id',
        'original_filename',
        'file_name',
        'file_size',
        'file_extension',
        'created_date',
        'created_by'
    ];
}
