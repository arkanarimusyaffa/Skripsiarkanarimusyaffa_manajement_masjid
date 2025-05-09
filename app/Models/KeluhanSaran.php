<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeluhanSaran extends Model
{
    protected $fillable = ['user_id', 'tipe', 'pesan'];
}
