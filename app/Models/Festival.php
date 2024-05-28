<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    // Define the table if it's not the plural form of the model name
    protected $table = 'festivals';
    // Define fillable fields, if necessary
    protected $fillable = ['district', 'name'];
}
