<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KierenStartList extends Model
{
    use HasFactory;
    protected $connection = 'cycling'; // Use external database
    protected $table = 'viz_keirin_startlist';
}
