<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\ClientController;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'client';
    public $timestamps = false;
}
